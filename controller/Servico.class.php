<?php 
require_once'Usuario.class.php';
require_once'Db.class.php';

class Servico{

	public function __construct(){
		if(isset($_POST['bts'])    == 'buscartiposervicos')$this->buscarDbTipoServicos();
		if(isset($_POST['ls'])     == 'listarservicos')    $this->listarServicos($_POST['idTipoServico']);
		if(isset($_POST['bnsts'])  == 'buscarnomests')     $this->buscarNomeSTS($_POST['idTipoServico'], $_POST['idServico']);
		
	}
	public function buscarDbTipoServicos(){
		$sql = "SELECT tipo_servico FROM cat_tipo_servico";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$pre_sql->execute();

		$query = Db::getInstancia()->query($sql);

		$retorno = $query->fetchAll(PDO::FETCH_ASSOC);
		$tipo_servico = array();

		foreach ($retorno as $value) {
			$tipo_servico[] =
				$value['tipo_servico'];
		}
		// Usando a função list para nomear os valores de $tipo_servico em ordem 
		list($assistenciaTecnica,$aulas,$autos,$consultoria,$design_tecnologia,$eventos,$moda_beleza,$reformas,$saude,$servicos_domestico) = $tipo_servico;

		echo json_encode($tipo_servico);
		
	}

	public function buscarServicos($idTipoServico){
		$sql = "
		SELECT id_servico,servico,id_tipo_servico, tipo_servico 
		FROM fk_servico_tipo_servico
		left join cat_servicos     on cat_servicos.id    = fk_servico_tipo_servico.id_servico
		left join cat_tipo_servico on cat_tipo_servico.id= fk_servico_tipo_servico.id_tipo_servico
		where fk_servico_tipo_servico.id_tipo_servico = $idTipoServico";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$pre_sql->execute();

		$query = Db::getInstancia()->query($sql);

		$retorno = $query->fetchAll(PDO::FETCH_ASSOC);
		$servicos = array();

		foreach ($retorno as $value) {
			$servicos[] = $value['servico'];
		}
		// Usando a função list para nomear os valores de $servico em ordem 

		echo json_encode($servicos);
		
	}

	public function listarServicos($idTipoServico){
		$sql = "SELECT id_servico,servico,id_tipo_servico, tipo_servico 
		FROM fk_servico_tipo_servico
		left join cat_servicos     on cat_servicos.id    = fk_servico_tipo_servico.id_servico
		left join cat_tipo_servico on cat_tipo_servico.id= fk_servico_tipo_servico.id_tipo_servico
		where fk_servico_tipo_servico.id_tipo_servico = $idTipoServico";

		$pre_sql    = Db::getInstancia()->prepare($sql);

		$query      = Db::getInstancia()->query($sql);

		$pre_sql->execute();

		$retorno    = $query->fetchAll(PDO::FETCH_ASSOC);
		$servico_idServico = array();

		foreach ($retorno as $value) {
			$servico_idServico[] = [$value['id_servico'],$value['servico']];
		}

		echo json_encode($servico_idServico);
	}

	public function buscarServico($idServico){
		$sql     = "SELECT servico FROM cat_servicos WHERE id = $idServico";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$query   = Db::getInstancia()->query($sql);

		$retorno = $query->fetch(PDO::FETCH_ASSOC);

		foreach ($retorno as $value) {
			$servico = $value;
		}

		echo json_encode($servico);

	}

	public function buscarTipoServico($idTipoServico){
		$sql     = "SELECT tipo_servico FROM cat_tipo_servico WHERE id = $idTipoServico";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$query   = Db::getInstancia()->query($sql);

		$pre_sql->execute();

		$retorno = $query->fetch(PDO::FETCH_ASSOC);

		foreach ($retorno as $value) {
			$tipoServico = $value;
		}
		echo json_encode($tipoServico);
	}

public function buscarNomeSTS($idTipoServico, $idServico){
		$sql = "SELECT id_servico,servico,id_tipo_servico, tipo_servico 
		FROM fk_servico_tipo_servico
		left join cat_servicos     on cat_servicos.id    = fk_servico_tipo_servico.id_servico
		left join cat_tipo_servico on cat_tipo_servico.id= fk_servico_tipo_servico.id_tipo_servico
		where fk_servico_tipo_servico.id_tipo_servico = $idTipoServico AND fk_servico_tipo_servico.id_servico = $idServico";

		$pre_sql    = Db::getInstancia()->prepare($sql);

		$query      = Db::getInstancia()->query($sql);

		$pre_sql->execute();

		$retorno    = $query->fetchAll(PDO::FETCH_ASSOC);
		$servico_idServico = array();

		foreach ($retorno as $value) {
			$servico_idServico[] = [$value['servico'],$value['tipo_servico']];
		}

		echo json_encode($servico_idServico);
	}

public function getServicos($indice){

switch ($indice){

case 'APARELHODESOM':
    echo 'oi';
    break;
case 'ARCONDICIONADO':
    echo 'oi';
    break;
case 'CÂMERA':
    echo 'oi';
    break;
case 'DVD/BLU-RAY':
    echo 'oi';
    break;
case 'HOMETHEATER':
    echo 'oi';
    break;
case 'TELEVISÃO':
    echo 'oi';
    break;
case 'VIDEOGAME':
    echo 'oi';
    break;
case 'FOGÃOECOOKTOP':
    echo 'oi';
    break;
case 'GELADEIRAEFREEZER':
    echo 'oi';
    break;
case 'LAVALOUÇA':
    echo 'oi';
    break;
case 'MÁQUINADELAVAR':
    echo 'oi';
    break;
case 'MICROONDAS':
    echo 'oi';
    break;
case 'CABEAMENTODEREDES':
    echo 'oi';
    break;
case 'CELULAR':
    echo 'oi';
    break;
case 'COMPUTADORDESKTOP':
    echo 'oi';
    break;
case 'IMPRESSORA':
    echo 'oi';
    break;
case 'NOTEBOOK':
    echo 'oi';
    break;
case 'TABLET':
    echo 'oi';
    break;
case 'TELEFONEFIXO':
    echo 'oi';
    break;
case 'TELEFONIAPABX':
    echo 'oi';
    break;
case 'ARTESEARTESANATOS':
    echo 'oi';
    break;
case 'AULASDEDANÇA':
    echo 'oi';
    break;
case 'BEM-ESTAR':
    echo 'oi';
    break;
case 'ESPORTES':
    echo 'oi';
    break;
case 'LUTAS':
    echo 'oi';
    break;
case 'AULASDEIDIOMAS':
    echo 'oi';
    break;
case 'AULASPARTICULARES':
    echo 'oi';
    break;
case 'CONCURSOS':
    echo 'oi';
    break;
case 'INFORMÁTICA':
    echo 'oi';
    break;
case 'MÚSICA':
    echo 'oi';
    break;
case 'ALARMEAUTOMOTIVO':
    echo 'oi';
    break;
case 'ARCONDICIONADO':
    echo 'oi';
    break;
case 'AUTOELÉTRICA':
    echo 'oi';
    break;
case 'SOMAUTOMOTIVO':
    echo 'oi';
    break;
case 'HIGIENIZAÇÃOEPOLIMETRO':
    echo 'oi';
    break;
case 'MARTELINHODEOURO':
    echo 'oi';
    break;
case 'PINTURA':
    echo 'oi';
    break;
case 'INSULFILM':
    echo 'oi';
    break;
case 'VIDRAÇARIAAUTOMOTIVA':
    echo 'oi';
    break;
case 'BORRACHARIA':
    echo 'oi';
    break;
case 'GUINCHO':
    echo 'oi';
    break;
case 'MECÂNICAGERAL':
    echo 'oi';
    break;
case 'MÍDIA':
    echo 'oi';
    break;
case 'ASSESSORIADEIMPRENSA':
    echo 'oi';
    break;
case 'PESQUISAEMGERAL':
    echo 'oi';
    break;
case 'PRODUÇÃODECONTEÚDO':
    echo 'oi';
    break;
case 'TRADUTORES':
    echo 'oi';
    break;
case 'AUXÍLIOADMINISTRATIVO':
    echo 'oi';
    break;
case 'CONTADOR':
    echo 'oi';
    break;
case 'DIGITALIZARDOCUMENTOS':
    echo 'oi';
    break;
case 'ECONOMIAEFINANÇAS':
    echo 'oi';
    break;
case 'SEGURANÇADOTRABALHO':
    echo 'oi';
    break;
case 'ADVOGADO':
    echo 'oi';
    break;
case 'CONSULTORIAESPECIALIZADA':
    echo 'oi';
    break;
case 'CONSULTORPESSOAL':
    echo 'oi';
    break;
case 'DETETIVEPARTICULAR':
    echo 'oi';
    break;
case 'APPSPARASMARTPHONE':
    echo 'oi';
    break;
case 'DESENVOLVIMENTODESITES':
    echo 'oi';
    break;
case 'MARKETINGDIGITAL':
    echo 'oi';
    break;
case 'CONVITES':
    echo 'oi';
    break;
case 'CRIAÇÃODELOGOS':
    echo 'oi';
    break;
case 'MATERIAISPROMOCIONAIS':
    echo 'oi';
    break;
case 'PRODUÇÃOGRÁFICA':
    echo 'oi';
    break;
case 'ANIMAÇÃOMOTION':
    echo 'oi';
    break;
case 'ÁUDIOEVÍDEO':
    echo 'oi';
    break;
case 'EDIÇÃODEFOTOS':
    echo 'oi';
    break;
case 'FOTOGRAFIA':
    echo 'oi';
    break;
case 'ILUSTRAÇÃO':
    echo 'oi';
    break;
case 'MODELAGEM2DE3D':
    echo 'oi';
    break;
case 'WEBDESIGN':
    echo 'oi';
    break;
case 'ASSESSORDEEVENTOS':
    echo 'oi';
    break;
case 'EQUIPAMENTODEEVENTOS':
    echo 'oi';
    break;
case 'GARÇONSECOPEIRAS':
    echo 'oi';
    break;
case 'RECEPCIONISTAS':
    echo 'oi';
    break;
case 'SEGURANÇAS':
    echo 'oi';
    break;
case 'BARTENDER':
    echo 'oi';
    break;
case 'BUFFETCOMPLETO':
    echo 'oi';
    break;
case 'CHURRASQUEIRO':
    echo 'oi';
    break;
case 'CONFEITEIRA':
    echo 'oi';
    break;
case 'ANIMAÇÃODEFESTAS':
    echo 'oi';
    break;
case 'BANDASECANTORES':
    echo 'oi';
    break;
case 'DJS':
    echo 'oi';
    break;
case 'BRINDESELEMBRANCINHAS':
    echo 'oi';
    break;
case 'CONVITES':
    echo 'oi';
    break;
case 'DECORAÇÃO':
    echo 'oi';
    break;
case 'EDIÇÃODEFOTOS':
    echo 'oi';
    break;
case 'FOTOGRAFIA':
    echo 'oi';
    break;
case 'CABELEREIRO':
    echo 'oi';
    break;
case 'DEPILAÇÃO':
    echo 'oi';
    break;
case 'DESIGNDESOBRANCELHAS':
    echo 'oi';
    break;
case 'ESTETICISTAS':
    echo 'oi';
    break;
case 'MAQUIADORES':
    echo 'oi';
    break;
case 'MANICUREEPEDICURE':
    echo 'oi';
    break;
case 'CORTEECOSTURA':
    echo 'oi';
    break;
case 'PERSONALSTYLIST':
    echo 'oi';
    break;
case 'SAPATEIRO':
    echo 'oi';
    break;
case 'ARTESANATO':
    echo 'oi';
    break;
case 'ESOTÉRICO':
    echo 'oi';
    break;
case 'ARQUITETOS':
    echo 'oi';
    break;
case 'ENGENHEIRO':
    echo 'oi';
    break;
case 'LIMPEZAPÓSOBRA':
    echo 'oi';
    break;
case 'PEDREIRO':
    echo 'oi';
    break;
case 'TERRAPLANAGEM':
    echo 'oi';
    break;
case 'ELETRICISTA':
    echo 'oi';
    break;
case 'ENCANADOR':
    echo 'oi';
    break;
case 'GESSOEDRYWALL':
    echo 'oi';
    break;
case 'SERRALHEIRAESOLDA':
    echo 'oi';
    break;
case 'VIDRACEIRO':
    echo 'oi';
    break;
case 'AUTOMAÇÃORESIDENCIAL':
    echo 'oi';
    break;
case 'CHAVEIRO':
    echo 'oi';
    break;
case 'DESENTUPIDOR':
    echo 'oi';
    break;
case 'DETETIZADOR':
    echo 'oi';
    break;
case 'IMPERMEBILIZADOR':
    echo 'oi';
    break;
case 'MARCENEIRO':
    echo 'oi';
    break;
case 'MARIDODEALUGUEL':
    echo 'oi';
    break;
case 'MUDANÇASECARRETO':
    echo 'oi';
    break;
case 'SEGURANÇAELETRÔNICA':
    echo 'oi';
    break;
case 'TAPECEIRO':
    echo 'oi';
    break;
case 'DECORADOR':
    echo 'oi';
    break;
case 'JARDINAGEM':
    echo 'oi';
    break;
case 'MONTADORDEMÓVEIS':
    echo 'oi';
    break;
case 'PAISAGISTA':
    echo 'oi';
    break;
case 'PISCINA':
    echo 'oi';
    break;
case 'COZINHEIRA':
    echo 'oi';
    break;
case 'FISIOTERAPEUTA':
    echo 'oi';
    break;
case 'FONODIÓLOGO':
    echo 'oi';
    break;
case 'NUTRICIONISTA':
    echo 'oi';
    break;
case 'QUIROPRÁTICO':
    echo 'oi';
    break;
case 'PSICÓLOGO':
    echo 'oi';
    break;
case 'ACOMPANHANTEDEIDOSOS':
    echo 'oi';
    break;
case 'ENFERMEIRA':
    echo 'oi';
    break;
case 'DIARISTA':
    echo 'oi';
    break;
case 'LIMPEZADEPISCINA':
    echo 'oi';
    break;
case 'PASSADEIRA':
    echo 'oi';
    break;
case 'TAPECEIRO':
    echo 'oi';
    break;
case 'BABÁ':
    echo 'oi';
    break;
case 'COZINHEIRA':
    echo 'oi';
    break;
case 'MOTORISTA':
    echo 'oi';
    break;
case 'ADESTRADORDECÃES':
    echo 'oi';
    break;
case 'PASSEADORDECÃES':
    echo 'oi';
    break;

    }

}

}
$servico = new Servico();
?>
