<html>
<head>
    <title>dhtmlxGrid. Server side</title>
    <link rel="stylesheet" href="/assets/grid_server_assets/codebase/dhtmlxgrid.css">
    <script src="/assets/grid_server_assets/codebase/dhtmlxgrid.js"></script>
</head>
<body>
<div id="mygrid_container" style="width:600px; height:160px;"></div>
<script>
    dhtmlxEvent(window,"load",function(){
        mygrid = new dhtmlXGridObject("mygrid_container");
        mygrid.setImagePath("codebase/imgs/"); //sets the path to the source images
        mygrid.setHeader("Name,Quantity,Price");           //sets the header labels
        mygrid.setInitWidths("*,150,150");     //sets the initial widths of columns
        mygrid.setColAlign("left,right,right");     //sets the horizontal alignment
        mygrid.setColTypes("ed,ed,price");              //sets the types of columns
        mygrid.setSkin("dhx_skyblue");                     //sets the skin to apply
        mygrid.init();
        mygrid.load("<?php echo base_url() ?>applications/views/grid-server/data.php");
    });
</script>
</body>
</html>