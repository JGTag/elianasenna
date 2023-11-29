
<?php
use models\Usuario;
use core\utils\ControllerHandler;


error_reporting(0); // error_reporting(E_ALL);



$idUsuario      = $_REQUEST[1];
$nomeUsuario    = $_REQUEST[2];
$email          = $_REQUEST[3];
$senha          = $_REQUEST[4];

$action = $_REQUEST[5];

switch ($action) {
    case 'insert':
        if ( isset($nomeUsuario) && isset($email) && isset($senha)){
            $usuario=  new Usuario();
            $usuario->populate($idUsuario, $nomeUsuario, $email, $senha);
            $usuario->save();
            echo json_encode(array("saved" => true, "message" => "Usuario cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Usuario não cadastrado!"));
            
        }
        break;
    case 'update':
        if ( isset($nomeUsuario) && isset($email) && isset($senha)){
            $usuario=  new Usuario();
            $usuario->populate($idUsuario, $nomeUsuario, $email, $senha);
            $usuario->save();
            echo json_encode(array("saved" => true, "message" => "Usuario atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Usuario não atualizado!"));
            
        }
        break;
    case 'delete':
        if ( isset($idUsuario) && isset($nomeUsuario) && isset($email) && isset($senha)){
            $usuario=  new Usuario();
            $usuario->populate($idUsuario, $nomeUsuario, $email, $senha);
            $usuario->delete();
            echo json_encode(array("saved" => true, "message" => "Usuario excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Usuario não excluido!"));
            
        }
        break;
}
class CtrlUsuario extends ControllerHandler
{
public function post()
{
    $data = $this->getData();
    $usuario = new Usuario();
    
    
    if (isset($data['action'])) {
        // Verifica a ação desejada
        $action = $data['action'];
        
        switch ($action) {
            case 'login':
                $email = $data['email'];
                $senha = $data['senha'];
                
                // Lógica para autenticar o usuário
                if (Usuario::authenticateUser($email, $senha)) {
                    // Usuário autenticado com sucesso
                    echo json_encode(['success' => true]);
                } else {
                    // Falha na autenticação
                    http_response_code(400);
                    echo json_encode([
                        'error' => 'Email ou senha inválidos.'
                    ]);
                }
                break;
            default:
                // Ação não reconhecida
                http_response_code(400);
                echo json_encode([
                    'error' => 'Ação não reconhecida.'
                ]);
                break;
        }
    } else {
    }
}
}

new CtrlUsuario();



?>