namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductEntry extends Model
{
    protected $fillable = ['idProduto', 'data', 'quantidade', 'fornecedor'];

    public function registrarEntrada() {
        // Lógica para registrar entrada de produto
    }
}
