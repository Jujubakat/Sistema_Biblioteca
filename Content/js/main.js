/*MAIN JS
jQuery(document).ready(function($) {
    /*$scope.atualizarTabelaPrincipal = function () {
		$http.get($scope.WebService).then(function (response) {
			if ( response.data ) {
				$('#tabela-principal').bootstrapTable('destroy');
				$('#tabela-principal').bootstrapTable({data: response.data});
			} else {
				$('#tabela-principal').bootstrapTable('destroy');
				$('#tabela-principal').bootstrapTable({data: []});
			}
		});
    }
    var urlGet = 'http://localhost/api_sistema-biblioteca/livro/read.php';
    $.get( 'http://localhost/api_sistema-biblioteca/livro/read.php', function(data) {
        $('#tabela-livros').bootstrapTable('destroy');
		$('#tabela-livros').bootstrapTable({data: data});
    });
    /*
    $.ajax({
        url:'http://localhost/api_sistema-biblioteca/livro/read.php',
        type:'GET',
        headers: { 
            'Accept': 'application/json',
            'Content-Type': 'application/json' 
        },
        dataType: 'json',
        data: JSON.stringify(dados),
        success: function(data) {
            $('#tabela-livros').bootstrapTable('destroy');
			$('#tabela-livros').bootstrapTable({data: data});
        }
    });
});*/