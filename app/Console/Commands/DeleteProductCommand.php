<?php

namespace App\Console\Commands;

use App\Repositories\EloquentProductRepository;
use Illuminate\Console\Command;

class DeleteProductCommand extends Command
{

    protected $signature = 'app:delete-product-command';
    protected $description = 'Command description';

    public function handle()
    {
        $productId = $this->ask('Ingrese el ID del producto a eliminar:');


        $productRepository = new EloquentProductRepository();
        $deleted = $productRepository->delete($productId);


        if ($deleted > 0) {
            $this->info('Producto eliminado correctamente.');
        } else {
            $this->error('No se encontró el Producto con el ID proporcionado.');
        }
    }
}
