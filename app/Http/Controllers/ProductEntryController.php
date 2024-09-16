namespace App\Http\Controllers;

use App\Models\ProductEntry;
use Illuminate\Http\Request;

class ProductEntryController extends Controller
{
    // Listar todas as entradas de produtos
    public function index()
    {
        return ProductEntry::all();
    }

    // Criar uma nova entrada de produto
    public function store(Request $request)
    {
        $entrada = ProductEntry::create($request->all());
        return response()->json($entrada, 201);
    }

    // Mostrar uma entrada de produto específica
    public function show($id)
    {
        return ProductEntry::findOrFail($id);
    }


    // Deletar uma entrada de produto
    public function destroy($id)
    {
        ProductEntry::destroy($id);
        return response()->json(null, 204);
    }

    // Registrar entrada de produtos
    public function registrarEntrada(Request $request, $id)
    {
        $entrada = ProductEntry::findOrFail($id);
        $entrada->quantidade += $request->input('quantidade');
        $entrada->save();
        return response()->json($entrada, 200);
    }
}
