namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'categoria', 'preco', 'quantidadeEmEstoque'];

    public function adicionarEstoque($quantidade) {
        $this->quantidadeEmEstoque += $quantidade;
        $this->save();
    }

    public function removerEstoque($quantidade) {
        $this->quantidadeEmEstoque -= $quantidade;
        $this->save();
    }

    public function atualizarPreco($novoPreco) {
        $this->preco = $novoPreco;
        $this->save();
    }

    public function obterInformacoesProduto() {
        return "Nome: $this->nome, Categoria: $this->categoria, Preço: $this->preco, Estoque: $this->quantidadeEmEstoque";
    }
}
