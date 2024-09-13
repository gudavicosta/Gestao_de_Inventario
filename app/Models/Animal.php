namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['nome', 'tipo', 'raca', 'idade'];

    public function registrarAnimal() {
        // A ser implementado
    }

    public function consultarInformacoes() {
        return "Nome: $this->nome, Tipo: $this->tipo, Raça: $this->raca, Idade: $this->idade";
    }
}
