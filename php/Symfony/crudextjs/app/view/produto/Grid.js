Ext.define('ExtMVC.view.produto.Grid' ,{
    extend: 'Ext.grid.Panel',
    alias : 'widget.produtogrid',
    
    requires: ['Ext.toolbar.Paging'],
    
    iconCls: 'icon-grid',

    title : 'produtos',
    store: 'Produtos',

    columns: [{
    	header: "Nome",
		width: 100,
		flex:1,
		dataIndex: 'nome'
	},
	{
		header: "Preco",
		width: 100,
		flex:1,
		dataIndex: 'preco'
	},
	{
		header: "Descricao",
		width: 150,
		flex:1,
		dataIndex: 'descricao'
	},
	{
		header: "categoria",
		width: 150,
		flex:1,
		dataIndex: 'nome_categoria'
	}
	],
	
	initComponent: function() {
		
		this.dockedItems = [{
            xtype: 'toolbar',
            items: [{
                iconCls: 'icon-save',
                itemId: 'add',
                text: 'Adicionar',
                action: 'add'
            },{
                iconCls: 'icon-delete',
                text: 'Excluir',
                action: 'delete'
            }]
        },
        {
            xtype: 'pagingtoolbar',
            dock:'top',
            store: 'Produtos',
            displayInfo: true,
            displayMsg: 'Mostrando produtos {0} - {1} de {2}',
            emptyMsg: "Nenhum produto encontrado."
        }];
		
		this.callParent(arguments);
	}
});
