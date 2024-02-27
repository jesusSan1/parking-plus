<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Recuperar extends BaseController
{
    protected $usuarios;
    protected $email;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
        $this->email = \Config\Services::email();
        helper('text');
    }
    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'email' => [
                    'label' => 'correo electronico',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'valid_email' => 'El {field} debe estar en formato de {field}',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $email = $this->request->getPost('email');
            $existEmail = $this->usuarios->where('email', $email)->first();
            if ($existEmail) {
                $userIsEnabled = $existEmail['habilitado'];
                $userEmail = $existEmail['email'];
                if ($userIsEnabled == false) {
                    return redirect()->back()->with('errors', "El usuario $userEmail no tiene permitido recuperar la contraseña")->withInput();
                }
                $token = random_string('nozero', 6);
                $this->usuarios->where('email', $userEmail)->set(['token' => $token])->update();
                $this->sendEmail($userEmail, $token);
                $sess_data = [
                    'existEmail' => true,
                    'correo' => $userEmail,
                ];
                session()->set($sess_data);
                return redirect()->to('verificar');
            }
            return redirect()->back()->with('errors', 'El correo electronico no existe')->withInput();
        }
        return view('recuperar/index');
    }
    public function sendEmail($email, $token)
    {
        $this->email->setFrom('jjsanru3@gmail.com', 'Soporte tecnico');
        $this->email->setTo($email);

        $this->email->setSubject('Recuperacion de contraseña');
        $this->email->setMessage("Hola $email: <br><br> Hemos recibido tu solicitud de recuperacion de contraseña.<br><br> Tu codigo de recuperacion es: $token <br><br> Si no solicitaste este codigo, puedes hacer caso omiso de este mensaje de correo electronico. Otra persona puede haber escrito tu direccion de correo electronico por error. <br><br> Gracias.");

        $this->email->send();

    }
}