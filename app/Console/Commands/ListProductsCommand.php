<?php

namespace App\Console\Commands;

use App\Repositories\EloquentNoticeRepository;
use App\Repositories\EloquentProductRepository;
use Illuminate\Console\Command;

class ListProductsCommand extends Command
{
    protected $signature = 'app:list-products-command';
    protected $description = 'Comando para mostrar todos los productos';
    public function handle()
    {

        $this->info("DASHBOARD - PRODUCTS - LISTADO");

        $productRepository = new EloquentProductRepository();
        $products = $productRepository->getAll(['id', 'name', 'price']);

        $this->table(['ID', 'Nombre', 'Precio'], $products);

    }
}
