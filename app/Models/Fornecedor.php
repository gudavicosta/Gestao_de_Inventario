namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome', 'contato', 'endereco'];

    public function registrarFornecedor() {
        // A ser implementado
    }

    public function atualizarInformacoes() {
        // A ser implementado
    }
}
