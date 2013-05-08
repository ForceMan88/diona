<script type="text/JavaScript">
    <!--
    function MM_swapImgRestore() { //v3.0
        var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }

    function MM_preloadImages() { //v3.0
        var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
            var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
    }

    function MM_findObj(n, d) { //v4.01
        var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
        if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
        for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
        if(!x && d.getElementById) x=d.getElementById(n); return x;
    }

    function MM_swapImage() { //v3.0
        var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
            if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }

    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
    }
    //-->
</script>

<div class="searchWrapper">
<div class="forBackgr2">
<div class="page">
<div class="search">
<div class="mainSearch">
<div class="search1 textsmallwhinte">
<h2 class="textzagtitleWh">Поиск недвижимости</h2>
<div class="addObject"><a class="menu3" href="<?php echo base_url('demand') ?>">Добавить Ваш объект</a></div><div class="objectnumber">резерв на к-во объектов</div>
<div class="searchMenu">
    <span><img height="36" width="104" src="<?php echo skin_url('4_1_1.gif') ?>"></span>
    <span><a onmouseover="MM_swapImage('Image13','','<?php echo skin_url('4_2_1.gif') ?>',1)" onmouseout="MM_swapImgRestore()" href="<?php echo base_url('demand') ?>?pok"><img height="36" width="99" name="Image13" src="<?php echo skin_url('4_2.gif')?>"></a></span>
    <span><a onmouseover="MM_swapImage('Image14','','<?php echo skin_url('4_3_1.gif') ?>',1)" onmouseout="MM_swapImgRestore()" href="<?php echo base_url('demand') ?>?aren"><img height="36" width="100" name="Image14" src="<?php echo skin_url('4_3.gif')?>"></a></span>
</div>
<div class="propertyType">
    <label for="real_estate" class="textwhinte">Вид недвижимости:</label>
    <div class="textwhinte">
        <select class="but1" id="real_estate" name="real_estate">
            <option value="flat">Квартиры</option>
            <option value="room">Комнаты в общежитии</option>
            <option value="house">Дома</option>
            <option value="parthouse">Часть Дома</option>
            <option value="cottage">Дачи</option>
            <option value="plot">Участки</option>
            <option value="industry">Коммерческая недв.</option>
        </select>
    </div>
    <div class="textwhinte forLine">
        <img src="<?php echo skin_url('line_go.png') ?>">
    </div>
</div>
<script type="text/javascript">
    function change_on_region(forma)
    {
        document.getElementById(forma).checked=true;
    }
</script>
<!--Начало контента на выборку информации-->
<!--Начало контентной части отображения фильтра КВАРТИРЫ-->
<div class="propertyTypes clearfix" id="flat">
    <form name="flat" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="flat" name="real_estate">
        <div class="">
            <div class="">
                <div class="clearfix">
                    <div class="textwhinte">
                        <div class="materials">
                            <label for="material">Материал дома:</label>
                            <select id="material" class="but1" name="material">
                                <option value="all">Любой</option>
                                <option value="к">Кирпич</option>
                                <option value="п">Панель</option>
                                <option value="дк">Дерево</option>
                            </select>
                        </div>
                        <div class="rooms">
                            <label for="count_room">Количество комнат:</label>
                            <select id="count_room" class="but1" name="count_room">
                                <option selected="" value="all">Любое</option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                            </select>
                        </div>
                        <div class="roomsTypes">
                            <label for="type_room">Тип комнат:</label>
                            <select id="type_room" class="but1" name="type_room">
                                <option selected="" value="all">Все</option>
                                <option value="р">Р</option>
                                <option value="см">См</option>
                                <option value="см/р">См/р</option>
                                <option value="р/расп">р/расп</option>
                                <option value="расп">расп</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="textwhinte floors"><span>Этаж:</span>
                        <div class="textsmallwhinte floorsFromTo">
                            <label for="floor_from" class="textsmallwhinte">от:</label><input type="text" id="floor_from" size="5" class="but1" name="floor_from">
                            <label for="floor_to" class="textsmallwhinte" >до:</label><input type="text" id="floor_to" size="5" class="but1" name="floor_to">
                        </div>
                    </div>
                    <div class="textsmallwhinte floorsNonfirsNonlast">
                        <div><input type="checkbox" id="n_f" value="not_first" name="n_f"><label for="n_f" class="textsmallwhinte">- не первый</label></div>
                        <div><input type="checkbox" value="not_last" name="n_l" id="n_l"><label for="n_l" class="textsmallwhinte">- не последний</label></div>
                    </div>
                    <div class="forLine"><img src="<?php echo skin_url('line_go.png') ?>"></div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <input type="radio" checked="" value="city" name="gr" id="city">
                    <label for="city" class="textsmallwhinte">- только город</label>
                    <input type="radio" value="при" name="gr" id="при">
                    <label for="при" class="textsmallwhinte">- только пригород</label>
                    <input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                    <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label>
                </div>
                <div class="">
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра КОМНАТЫ В ОБЩЕЖИТИИ-->
<div class="propertyTypes clearfix" id="room" style="display:none;">
    <form name="room" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="room" name="real_estate">
        <div class="">
            <div class="">
                <div class="clearfix">
                    <div class="textwhinte">
                        <div class="materials">
                            <label for="material">Материал дома:</label>
                            <select id="material" class="but1" name="material">
                                <option value="all">Любой</option>
                                <option value="к">Кирпич</option>
                                <option value="п">Панель</option>
                                <option value="дк">Дерево</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="textwhinte floors"><span>Этаж:</span>
                        <div class="textsmallwhinte floorsFromTo">
                            <label for="floor_from" class="textsmallwhinte">от:</label><input type="text" id="floor_from" size="5" class="but1" name="floor_from">
                            <label for="floor_to" class="textsmallwhinte" >до:</label><input type="text" id="floor_to" size="5" class="but1" name="floor_to">
                        </div>
                    </div>
                    <div class="textsmallwhinte floorsNonfirsNonlast">
                        <div><input type="checkbox" id="n_f" value="not_first" name="n_f"><label for="n_f" class="textsmallwhinte">- не первый</label></div>
                        <div><input type="checkbox" value="not_last" name="n_l" id="n_l"><label for="n_l" class="textsmallwhinte">- не последний</label></div>
                    </div>
                    <div class="forLine"><img src="<?php echo skin_url('line_go.png') ?>"></div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <input type="radio" checked="" value="city" name="gr" id="city">
                    <label for="city" class="textsmallwhinte">- только город</label>
                    <input type="radio" value="при" name="gr" id="при">
                    <label for="при" class="textsmallwhinte">- только пригород</label>
                    <input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                    <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label>
                </div>
                <div class="">
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра Дома-->
<div class="propertyTypes clearfix" id="house" style="display:none;">
    <form name="house" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="house" name="real_estate">
        <div class="">
            <div class="">
                <div class="clearfix">
                    <div class="textwhinte">
                        <div class="materials">
                            <label for="material">Материал дома:</label>
                            <select id="material" class="but1" name="material">
                                <option value="all">Любой</option>
                                <option value="к">Кирпич</option>
                                <option value="п">Панель</option>
                                <option value="дк">Дерево</option>
                            </select>
                        </div>
                        <div class="rooms">
                            <label for="count_room">Количество комнат:</label>
                            <select id="count_room" class="but1" name="count_room">
                                <option selected="" value="all">Любое</option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                            </select>
                        </div>
                        <div class="roomsTypes">
                            <label for="type_room">Тип комнат:</label>
                            <select id="type_room" class="but1" name="type_room">
                                <option selected="" value="all">Все</option>
                                <option value="р">Р</option>
                                <option value="см">См</option>
                                <option value="см/р">См/р</option>
                                <option value="р/расп">р/расп</option>
                                <option value="расп">расп</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <input type="radio" checked="" value="city" name="gr" id="city">
                    <label for="city" class="textsmallwhinte">- только город</label>
                    <input type="radio" value="при" name="gr" id="при">
                    <label for="при" class="textsmallwhinte">- только пригород</label>
                    <input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                    <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label>
                </div>
                <div class="">
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра  Часть Дома-->
<div class="propertyTypes clearfix" id="parthouse" style="display:none;">
    <form name="flat" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="flat" name="real_estate">
        <div class="">
            <div class="">
                <div class="clearfix">
                    <div class="textwhinte">
                        <div class="materials">
                            <label for="material">Материал дома:</label>
                            <select id="material" class="but1" name="material">
                                <option value="all">Любой</option>
                                <option value="к">Кирпич</option>
                                <option value="п">Панель</option>
                                <option value="дк">Дерево</option>
                            </select>
                        </div>
                        <div class="rooms">
                            <label for="count_room">Количество комнат:</label>
                            <select id="count_room" class="but1" name="count_room">
                                <option selected="" value="all">Любое</option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                            </select>
                        </div>
                        <div class="roomsTypes">
                            <label for="type_room">Тип комнат:</label>
                            <select id="type_room" class="but1" name="type_room">
                                <option selected="" value="all">Все</option>
                                <option value="р">Р</option>
                                <option value="см">См</option>
                                <option value="см/р">См/р</option>
                                <option value="р/расп">р/расп</option>
                                <option value="расп">расп</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <input type="radio" checked="" value="city" name="gr" id="city">
                    <label for="city" class="textsmallwhinte">- только город</label>
                    <input type="radio" value="при" name="gr" id="при">
                    <label for="при" class="textsmallwhinte">- только пригород</label>
                    <input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                    <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label>
                </div>
                <div class="">
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
        <form>
</div>
<!--Начало контентной части отображения фильтра  Дачи-->
<div class="propertyTypes clearfix" id="cottage" style="display:none;">
    <form name="cottage" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="cottage" name="real_estate">
        <div class="">
            <div class="">
                <div class="clearfix">
                    <div class="textwhinte">
                        <div class="materials">
                            <label for="material">Материал дома:</label>
                            <select id="material" class="but1" name="material">
                                <option value="all">Любой</option>
                                <option value="к">Кирпич</option>
                                <option value="п">Панель</option>
                                <option value="дк">Дерево</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="textsmallwhinte clearfix">
                <div class="textwhinte">Районы:</div>
                <div class="">
                    <div class="areas2">
                        <div><input type="checkbox" value="Барашевский" name="region[]" id="region13"><label for="region13" class="textsmallwhinte">Барашевский массив</label></div>
                        <div><input type="checkbox" value="Бобровский" name="region[]" id="region14"><label for="region14" class="textsmallwhinte">Бобровский массив</label></div>
                        <div><input type="checkbox" value="Вильский" name="region[]" id="region15"><label for="region15" class="textsmallwhinte">Вильский массив</label></div>
                        <div><input type="checkbox" value="Давыдовский" name="region[]" id="region16"><label for="region16" class="textsmallwhinte">Давыдовский массив</label></div>
                        <div><input type="checkbox" value="Тетеревский" name="region[]" id="region17"><label for="region17" class="textsmallwhinte">Тетеревский массив</label></div>
                        <div><input type="checkbox" value="Новогуйвинск" name="region[]" id="region18"><label for="region18" class="textsmallwhinte">Новогуйвинск массив</label></div>
                    </div>
                    <div class="areas2">
                        <div><input type="checkbox" value="Пряжев" name="region[]" id="region19"><label for="region19" class="textsmallwhinte">Пряжев массив</label></div>
                        <div><input type="checkbox" value="Соколовский" name="region[]" id="region20"><label for="region20" class="textsmallwhinte">Соколовский массив</label></div>
                        <div><input type="checkbox" value="Станишовский" name="region[]" id="region21"><label for="region21" class="textsmallwhinte">Станишовский массив</label></div>
                        <div><input type="checkbox" value="Березовский" name="region[]" id="region22"><label for="region22" class="textsmallwhinte">Березовский массив</label></div>
                        <div><input type="checkbox" value="other" name="region[]" id="region23"><label for="region23" class="textsmallwhinte">Другие массив</label></div>
                    </div>
                </div>
                <div class="textsmallwhinte clearfix areasNoChoise">
                    <em>Если не выбран не один район, выбираются все районы.</em>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра  Участки-->
<div class="propertyTypes clearfix" id="plot" style="display:none;">
    <form name="plot" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="plot" name="real_estate">
        <div class="">
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <input type="radio" checked="" value="city" name="gr" id="city">
                    <label for="city" class="textsmallwhinte">- только город</label>
                    <input type="radio" value="при" name="gr" id="при">
                    <label for="при" class="textsmallwhinte">- только пригород</label>
                    <input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                    <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label>
                </div>
                <div class="">
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра Коммерческая недв.-->
<div class="propertyTypes clearfix" id="industry" style="display:none;">
    <form name="industry" enctype="multipart/form-data" method="GET" action="<?php  echo base_url('search') ?>">
        <input type="hidden" value="industry" name="real_estate">
        <div class="">
            <div class="industryType">
                <div class="textwhinte">Тип:</div>
                <div class="">
                    <select id="type_estate" class="but1" name="type_estate">
                        <option value="all">Вся недвижимость</option>
                        <option value="под офис">Под офис</option>
                        <option value="магазин">Под магазин</option>
                    </select>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort">
                        <label for="sorted">Сортировать:</label>
                        <div>
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price">
                        <span><strong>Цена (у.е.):</strong></span>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <input type="radio" checked="" value="city" name="gr" id="city">
                    <label for="city" class="textsmallwhinte">- только город</label>
                    <input type="radio" value="при" name="gr" id="при">
                    <label for="при" class="textsmallwhinte">- только пригород</label>
                    <input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                    <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label>
                </div>
                <div class="">
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                    </div>
                    <div class="areas">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
<div class="bufer"><!----></div>
</div>
</div>
<div class="maincontent-container bg4">
    <div class="forBackgr1">
        <div class="forBackgrLine">
            <div class="page">
                <div class="hotDeals">

                    <img height="49" width="159" alt="купить квартиру в житомире" src="<?php echo skin_url('3_3.gif')?>"/>
                    <?php if (isset($data) and is_array($data)) : ?>
                        <div class="gallery">
                            <?php foreach($data as $key=>$item) : ?>
                                <div class="item<?php echo $key ?> hotDealsPics">
                                    <?php $i = 0; ?>
                                    <?php if(isset($item['image']) and !empty($item['image'])) :?>
                                    <?php foreach($item['image'] as $image) : ?>
                                        <a <?php echo  ($i >= 1) ? 'style="display:none"' : ''?> href="<?php echo skin_url('sales/' . $image)?>"><img src="<?php echo  ($i >= 1) ? 'data:' : ''?><?php echo skin_url('sales/' . $image)?>" height="42" width="48" alt="pic1"/></a>
                                        <?php $i++ ;?>
                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="textsmallbalck quick">

                            <b>На сегодня Есть Три ГОРЯЧИХ предложения!</b>
                            <?php $i = 1; ?>
                            <?php foreach($data as $item) : ?>
                                    <p>
                                    <?php echo '<strong>'.$i.'.'.'</strong>'?>
                                    <?php echo $item['info']->street ?>

                                    <?php if($item['info']->real_estate > 0): ?>
                                        <span>этаж:<?php echo $item['info']->real_estate ?></span>
                                    <?php endif;?>
                                    <?php if (!empty($item->count_room)): ?>
                                        <?php echo $item['info']->count_room.' комнат.' ?>
                                    <?php endif;?>
                                    <span>М²:&nbsp<?php echo $item['info']->total_area.'/'.$item['info']->living_area.'/'.$item['info']->kitchen_area ?></span>
                                    <?php echo $item['info']->description ?></br>
                                    <b>Цена <?php echo $item['info']->price ?>.</b>
                                </p>
                            <?php endforeach; ?>
                            <?php $i++ ;?>
                            <p><b>(067) 933-29-51</b></p>
                            <p class="advertisementData">25.09.2010</p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mainPageContent bg5">
                    <div class="mainInfoImg"><img height="49" width="272" alt="квартиры в Житомире" src="<?php echo skin_url('3_6.gif')?>"></div>
                    <div class="mainInfo textbalck">
                        <p>Агентство недвижимости «Диона» начало свою безупречную деятельность 25 сентября 2001 года. И по сей день развивается, в области
                            недвижимости, изучая и учитывая все изменения рынка спроса, законодательства и пожеланий клиентов. Покупка любого характера
                            недвижимости: будь то просто квартира либо элитный коттедж, мы доведем дело до конца со всеми сопутствующими услугами, такими как: 						юридическая помощь, помощь в грамотном оформлении кредита и обеспечением всей нужной документацией при покупке продаже
                            <strong>недвижимости в Житомире</strong>. Также если Вам нужно<strong>продать квартиру в Житомире</strong>
                            не ломайте долго голову над вопросом о стоимости наши сотрудники компетентно и справедливо оценят Вашу недвижимость.</p>
                        <p>Мы работаем не только по Житомиру, а и по всей житомирской области, что уже само за себя говорит насколько у нас богатая база
                            данных недвижимости. За счет нашего незаменимого опыта в сфере недвижимости все без исключения клиенты, даже самые принципиальные
                            и переборчивый, остаются довольными. Каждый клиент для нас личность, вне зависимости от его статуса, мы подберем для каждого
                            индивидуальный вариант, который подходит именно Вам. Не тратьте больше своего свободного времени на поиски покупки
                            квартиры в Житомире, мы в кратчайшие сроки подберем для Вас лучшие варианты.</p>
                        <p><strong>Купить или продать квартиру в Житомире</strong>теперь не требует лишних хлопот и забот, наши сотрудники за Вас
                            все подыщут и предложат Вам наиболее подходящие варианты, учитывая все Ваши пожелания и требования.</p>
                        <p>Добившись респектабельной репутации на ринке недвижимости по житомирской области, нас советуют и рекомендуют людям.
                            Совет - это лучшая реклама, и в сфере недвижимости, потому что один довольный клиент приведет 10 клиентов.
                            Наши клиенты доверяют нам за наше отменное предоставлен</p>
                    </div>
                </div>
                <div class="partners"><img height="46px" width="172px" alt="Продать квартиру в Житомире" src="<?php echo skin_url('asklepiy.gif') ?>"/></div>
            </div>
            <div class="bufer"><!----></div>
        </div>
    </div>
</div>
</div>
</div>
