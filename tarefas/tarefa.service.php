<?php


//usada para instância de um objeto que vai intermediar
//a gravação de uma tarefa no banco de dados (CRUD)
class TarefaService
{
	private $conexao;
	private $tarefa;
    public $lista;
    public $contador = 0;

	public function __construct(Conexao $conexao, Tarefa $tarefa)
	{
		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
	}
	public function inserir()
	{ //create

		$query = 'INSERT INTO tb_tarefas(tarefa)VALUES(:tarefa)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->execute();
	}

	public function recuperar()
	{ //read
        $query = "SELECT * FROM tb_tarefas WHERE (id <> 1)"; 
        $result = $this->conexao->query($query_);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        $this->lista[$this->contador] = $row['tarefa'];
        $this->contador++;
	}

	public function atualizar()
	{ //update

	}

	public function remover()
	{ //delete

	}
}