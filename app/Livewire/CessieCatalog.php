<?php

namespace App\Livewire;

use App\Data\CessieCollectionData;
use App\Data\CessieData;
use App\Models\Cessie;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class CessieCatalog extends Component
{
    use WithPagination;

    public $queryString = [
        'select_collections' => ['except' => []],
        'search' => ['except' => []],
        'sortby' => ['except' => 'newest'],
    ];

    public array $select_collections = [];

    public string $search = '';

    public string $sortby = 'newest';

    public function mount()
    {
        $this->validate();
    }

    public function rules()
    {
        return [
            'select_collections' => 'array',
            'select_collections.*' => 'integer|exists:tags,id',
            'search' => 'nullable|string|min:3|max:30',
            'sortby' => 'in:newest,latest,price_asc,price_desc',
        ];
    }

    public function applyFilters()
    {
        $this->validate();
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->select_collections = [];
        $this->search = '';
        $this->sortby = 'newest';

        $this->resetErrorBag();
        $this->resetPage();
    }

    public function render()
    {
        $collections = CessieCollectionData::collect([]);
        $cessies = CessieData::collect([]);

        if($this->getErrorBag()->isNotEmpty()) {
            return view('livewire.cessie-catalog', compact('cessies', 'collections'));
        }

        $collection_result = Tag::query()->withType('collection')->withCount('cessies')->get();

        $query = Cessie::query();

        if ($this->search)
        {
            $query->where('region', 'LIKE', "%{$this->search}%");
        }

        if (!empty($this->select_collections))
        {
            $query->whereHas('tags', function ($q) {
                $q->whereIn('id', $this->select_collections);
            });
        }

        switch ($this->sortby) {
            case 'latest':
                $query->oldest();
                break;
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $cessies = CessieData::collect(
            $query->paginate(3)
        );

        $collections = CessieCollectionData::collect($collection_result);

        return view('livewire.cessie-catalog', compact('cessies', 'collections'));
    }


    // public function render()
    // {
    //     return view('livewire.cessie-catalog');
    // }
}
