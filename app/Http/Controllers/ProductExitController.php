namespace App\Http\Controllers;

use App\Models\ProductExit;
use Illuminate\Http\Request;

class ProductExitController extends Controller
{
    // Listar todas as saídas de produtos
    public function index()
    {
        return ProductExit::all();
    }

    // Criar uma nova saída de produto
    public function store(Request $request)
    {
        $saida = ProductExit::create($request->all());
        return response()->json($saida, 201);
    }

    // Mostrar uma saída de produto específica
    public function show($id)
    {
        return ProductExit::findOrFail($id);
    }


    // Deletar uma saída de produto
    public function destroy($id)
    {
        ProductExit::destroy($id);
        return response()->json(null, 204);
    }

    // Registrar saída de produtos
    public function registrarSaida(Request $request, $id)
    {
        $saida = ProductExit::findOrFail($id);
        $saida->quantidade += $request->input('quantidade');
        $saida->save();
        return response()->json($saida, 200);
    }
}
