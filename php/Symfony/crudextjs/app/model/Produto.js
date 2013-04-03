Ext.define('ExtMVC.model.Produto', {
    extend: 'Ext.data.Model',
    fields: [
	          {name:'id'}, 
			  {name:'nome'}, 
			  {name: 'preco'}, 
			  {name: 'descricao'},
			  {name: 'categoria_id',   type: 'int',
                mapping: 'categoria.id'},
			  {name: 'nome_categoria',   type: 'string',
                mapping: 'categoria.nome'}				
			],
	hasOne: {model: 'Categoria' }
});