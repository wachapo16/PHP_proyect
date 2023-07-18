<?php
namespace App\Console\Commands;

use App\Repositories\EloquentProductRepository;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateProductCommand extends Command
{
    protected $signature = 'app:update-product-command';
    protected $description = 'Actualizar Productos';

    public function handle ()
    {
        $productId = $this->ask('Ingrese el ID del producto a actualizar:');
        $productRepository = new EloquentProductRepository();

        try {
            $product = $productRepository->findById($productId);

            $name = $this->ask('Ingrese el nuevo nombre:');
            $image = $this->ask('Ingrese la nueva imagen:');
            $price = $this->ask('Ingrese el nuevo precio:');

            $productRepository->update($product,$name, $image, $price);
             $this->info('Product actualizado correctamente.');
        } catch(ModelNotFoundException $exception) {
            $this->error('No se encontró el Producto con el ID proporcionado.');
    }
}
}
