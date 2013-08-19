<?php
namespace
{
	class Message
	{

		private $type;
		public $noRecordFound = '<pre class="alert-warning">Nenhum registro encontrado</pre>';
		public $messageNotSend = '<pre class="alert-error">NÃ£o foi possÃ­vel enviar sua mensagem!</pre>';
		public $messageSend = '<pre class="alert-success">Mensagem Enviada com sucesso!</pre>';
		private $message = '';		

		public function setType($type)
		{
			$this->type = $type;
			return $this;
		}

		public function newMessage($message)
		{
			$type = ($this->type != '')? '-'.$this->type : '';
			$this->message = '<pre class="alert'.$type.'">'.$message.'</pre>';
		}

		public function __get($prop)
		{
			return $this->$prop;
		}
	}
}