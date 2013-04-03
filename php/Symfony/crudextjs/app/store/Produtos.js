Ext.define('ExtMVC.store.Produtos', {
    extend: 'Ext.data.Store',
    model: 'ExtMVC.model.Produto',
    autoLoad: true,
    pageSize: 35,
    autoLoad: {start: 0, limit: 35},
    
    proxy: {
        type: 'ajax',
		type: 'rest',
        url: '/web/app_dev.php/produto/',
		
		//api: {
        //	create: 'php/criaProduto.php', 
        //    read: '/web/app_dev.php/produto/',
        //    //read: 'php/listaProdutos.php',
        //    update: '/web/app_dev.php/produto/',
        //    //update: 'php/atualizaProduto.php',
        //    destroy: 'php/deletaProduto.php',
        //},
        reader: {
            type: 'json',
            root: 'produtos',
            successProperty: 'success'
        },
        writer: {
            type: 'json',
            writeAllFields: true,
            encode: true,
            root: 'produtos'
        }
    }
});