Ext.Loader.setConfig({enabled: true});
 
Ext.application({
    name: 'ExtMVC',
 
    controllers: [
        'Produtos'
    ],
 
    autoCreateViewport: true
});