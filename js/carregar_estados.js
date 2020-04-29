var selecao_estados = document.querySelector('#selecao-estados');

// Lista de estados brasileiro
lista_estados = [
'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Distrito Federal',
'Espírito Santo', 'Goías', 'Maranhão', 'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais',
'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio grande do Sul',
'Rodônia', 'Roraima', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'
];

lista_estados_abreviados = [
    'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT',
    'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN' ,'RS',
    'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
];

// Carregar dados no campo de estados
for(var i = 0; i < lista_estados.length; i++) {

    var estado = document.createElement('option');
    
    estado.value = lista_estados[i];
    estado.textContent = lista_estados_abreviados[i];

    selecao_estados.appendChild(estado);

}
