namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['nome', 'tipo', 'raca', 'idade'];

    public function registrarAnimal() {
        // A ser implementado
    }

    public function consultarInformacoes() {
       // A ser implementado
    }
}
