<?php

namespace App\Livewire;

use App\Data\SaleCollectionData;
use App\Data\SaleData;
use App\Models\Sale;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class SaleCatalog extends Component
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
        $collections = SaleCollectionData::collect([]);
        $sales = SaleData::collect([]);

        if($this->getErrorBag()->isNotEmpty()) {
            return view('livewire.sale-catalog', compact('sales', 'collections'));
        }

        $collection_result = Tag::query()->withType('collection')->withCount('sales')->get();

        $query = Sale::query();

        if ($this->search)
        {
            $query->where('name', 'LIKE', "%{$this->search}%");
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
        
        $sales = SaleData::collect(
            $query->paginate(9)
        );

        $collections = SaleCollectionData::collect($collection_result);

        return view('livewire.sale-catalog', compact('sales', 'collections'));
    }
    // public function render()
    // {
    //     return view('livewire.sale-catalog');
    // }
}
