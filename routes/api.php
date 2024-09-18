use App\Http\Controllers\ProductController;
use App\Http\Controllers\PetshopUserController;
use App\Http\Controllers\ProductEntryController;
use App\Http\Controllers\ProductExitController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

// Rotas Públicas (Sem Autenticação)
Route::post('/register', [PetshopUserController::class, 'store']);
Route::post('/login', [PetshopUserController::class, 'login']);

// Rotas Protegidas (Requer Autenticação via Sanctum)
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [PetshopUserController::class, 'logout']);
    Route::post('/validate-token', [PetshopUserController::class, 'validateToken']);

    // Rotas para Usuários
    Route::get('/users', [PetshopUserController::class, 'index']);
    Route::get('/users/{id}', [PetshopUserController::class, 'show']);
    Route::put('/users/{id}', [PetshopUserController::class, 'update']);
    Route::delete('/users/{id}', [PetshopUserController::class, 'destroy']);

    // Rotas para Produtos
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/products/{id}/add-stock', [ProductController::class, 'adicionarEstoque']);
    Route::post('/products/{id}/remove-stock', [ProductController::class, 'removerEstoque']);
    Route::post('/products/{id}/update-price', [ProductController::class, 'atualizarPreco']);

    // Rotas para Entrada de Produtos
    Route::get('/product-entries', [ProductEntryController::class, 'index']);
    Route::post('/product-entries', [ProductEntryController::class, 'store']);
    Route::get('/product-entries/{id}', [ProductEntryController::class, 'show']);
    Route::put('/product-entries/{id}', [ProductEntryController::class, 'update']);
    Route::delete('/product-entries/{id}', [ProductEntryController::class, 'destroy']);
    Route::post('/product-entries/{id}/register', [ProductEntryController::class, 'registrarEntrada']);

    // Rotas para Saída de Produtos
    Route::get('/product-exits', [ProductExitController::class, 'index']);
    Route::post('/product-exits', [ProductExitController::class, 'store']);
    Route::get('/product-exits/{id}', [ProductExitController::class, 'show']);
    Route::put('/product-exits/{id}', [ProductExitController::class, 'update']);
    Route::delete('/product-exits/{id}', [ProductExitController::class, 'destroy']);
    Route::post('/product-exits/{id}/register', [ProductExitController::class, 'registrarSaida']);

    // Rotas para Fornecedores
    Route::get('/fornecedores', [FornecedorController::class, 'index']);
    Route::post('/fornecedores', [FornecedorController::class, 'store']);
    Route::get('/fornecedores/{id}', [FornecedorController::class, 'show']);
    Route::put('/fornecedores/{id}', [FornecedorController::class, 'update']);
    Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy']);
    
    // Rotas para Clientes
    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::post('/clientes', [ClienteController::class, 'store']);
    Route::get('/clientes/{id}', [ClienteController::class, 'show']);
    Route::put('/clientes/{id}', [ClienteController::class, 'update']);
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);
    Route::get('/clientes/{id}/historico', [ClienteController::class, 'consultarHistoricoCompras']);

    // Rotas para Animais
    Route::get('/animals', [AnimalController::class, 'index']);
    Route::post('/animals', [AnimalController::class, 'store']);
    Route::get('/animals/{id}', [AnimalController::class, 'show']);
    Route::put('/animals/{id}', [AnimalController::class, 'update']);
    Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);
    Route::get('/animals/{id}/info', [AnimalController::class, 'consultarInformacoes']);
});
