Ext.define('ExtMVC.controller.Produtos', {
    extend: 'Ext.app.Controller',

    stores: ['Produtos'],

    models: ['Produto'],

    views: ['produto.Grid'],

    refs: [{
            ref: 'produtoPanel',
            selector: 'panel'
        },{
            ref: 'produtoGrid',
            selector: 'grid'
        }
    ],

    init: function() {
        this.control({
            'produtogrid dataview': {
                itemdblclick: this.editarProduto
            },
            'produtogrid button[action=add]': {
            	click: this.editarProduto
            },
            'produtogrid button[action=delete]': {
                click: this.deleteProduto
            },
            'produtoform button[action=save]': {
                click: this.updateProduto
            }
        });
    },

    editarProduto: function(grid, record) {
        //Ext.Msg.alert('Status', '<h1>Vai ser editado!<\/h1>');
        var edit = Ext.create('ExtMVC.view.produto.Formulario').show();
        
        if(record){
        	edit.down('form').loadRecord(record);
        }
    },
    
    updateProduto: function(button) {
        var win    = button.up('window'),
            form   = win.down('form'),
            record = form.getRecord(),
            values = form.getValues();
        
        var novo = false;
        
		if (values.id > 0){
			record.set(values);
		} else{
			record = Ext.create('ExtMVC.model.Produto');
			record.set(values);
			this.getProdutosStore().add(record);
            novo = true;
		}
        
		win.close();
        this.getProdutosStore().sync();
        this.getProdutosStore().load();

        if (novo){ //faz reload para atualziar
            this.getProdutosStore().load();
        }
    },
    
    deleteProduto: function(button) {
    	
    	var grid = this.getProdutoGrid(),
    	record = grid.getSelectionModel().getSelection(), 
        store = this.getProdutosStore();

	    store.remove(record);
	    this.getProdutosStore().sync();

        //faz reload para atualziar
        this.getProdutosStore().load();
    }
});
