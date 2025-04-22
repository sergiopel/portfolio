<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Novo Contato do Portfólio</title>
</head>
<body>
    <h2>Novo contato recebido</h2>
    
    <p><strong>Nome:</strong> {{ $data['name'] }}</p>
    <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html> 