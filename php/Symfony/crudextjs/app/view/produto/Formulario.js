Ext.define('ExtMVC.view.produto.Formulario', {
    extend: 'Ext.window.Window',
    alias : 'widget.produtoform',

    requires: ['Ext.form.Panel','Ext.form.field.Text'],

    title : 'Editar/Criar Produto',
    layout: 'fit',
    autoShow: true,
    width: 280,
    
    iconCls: 'icon-user',

    initComponent: function() {
        this.items = [
            {
                xtype: 'form',
                padding: '5 5 0 5',
                border: false,
                style: 'background-color: #fff;',
                
                fieldDefaults: {
                    anchor: '100%',
                    labelAlign: 'left',
                    allowBlank: false,
                    combineErrors: true,
                    msgTarget: 'side'
                },

                items: [
					{
					    xtype: 'textfield',
					    name : 'id',
					    fieldLabel: 'id',
					    hidden:true
					},    
                    {
                        xtype: 'textfield',
                        name : 'nome',
                        fieldLabel: 'nome'
                    },
                    {
                        xtype: 'textfield',
                        name : 'preco',
                        fieldLabel: 'preco'
                    },
                    {
                        xtype: 'textfield',
                        name : 'descricao',
                        fieldLabel: 'descricao'
                    }
                ]
            }
        ];
        
        this.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            id:'buttons',
            ui: 'footer',
            items: ['->', {
                iconCls: 'icon-save',
                text: 'Salvar',
                action: 'save'
            },{
                iconCls: 'icon-reset',
                text: 'Cancelar',
                scope: this,
                handler: this.close
            }]
        }];

        this.callParent(arguments);
    }
});
