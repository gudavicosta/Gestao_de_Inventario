namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'contato', 'email'];

    public function registrarCliente() {
        // A ser implementado
    }

    public function consultarHistoricoCompras() {
        // A ser implementado
    }
}
