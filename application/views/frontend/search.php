<div class="searchContentContainer">
<div class="page">
<div class="searchContentleft">
<div class="searchSearchWrapper">
<div class="searchTop"></div>
<div class="searchCenter">
    <h2 class="poiskParm">Параметры поиска</h2>
    <div class="propertyTypeSearch">
        <label class="textwhinte" for="real_estate">Вид недвижимости:</label>
        <div class=""><select name="real_estate" id="real_estate" class="but1">
            <option value="flat" selected="">Квартиры</option>
            <option value="room">Комнаты в общежитии</option>
            <option value="house">Дома</option>
            <option value="parthouse">Часть Дома</option>
            <option value="cottage">Дачи</option>
            <option value="plot">Участки</option>
            <option value="industry">Коммерческая недв.</option>
        </select>
        </div>
        <div class="forLine2">
            <img src="<?php echo skin_url('line_go.png') ?>">
        </div>
    </div>
    <script type="text/javascript">
        function change_on_region(forma)
        {
            document.getElementById(forma).checked=true;
        }
    </script>
    <!--Начало контентной части отображения фильтра КВАРТИРЫ-->
    <!--Начало контента на выборку информации-->
    <div class="clearfix" id="flat">
        <form name="flat" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
            <input type="hidden" value="flat" name="real_estate">
            <div class="">
                <div class="">
                    <div class="clearfix constructionOptions">
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
                                <div><select id="count_room" class="but1" name="count_room">
                                    <option selected="" value="all">Любое</option>
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                </select></div>
                            </div>
                            <div class="roomsTypes">
                                <label for="type_room">Тип комнат:</label>
                                <select id="type_room" class="but1 typeRoomSearch" name="type_room">
                                    <option selected="" value="all">Все</option>
                                    <option value="р">Р</option>
                                    <option value="см">См</option>
                                    <option value="см/р">См/р</option>
                                    <option value="р/расп">р/расп</option>
                                    <option value="расп">расп</option>
                                </select>
                            </div>
                        </div>
                        <div class="forLine2">
                            <img src="<?php echo skin_url('line_go.png') ?>">
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="textwhinte floorsSearch"><span>Этаж:</span>
                            <div class="textsmallwhinte floorsFromTo">
                                <label for="floor_from" class="textsmallwhinte">от:</label><input type="text" id="floor_from" size="5" class="but1" name="floor_from">
                                <label for="floor_to" class="textsmallwhinte" >до:</label><input type="text" id="floor_to" size="5" class="but1" name="floor_to">
                            </div>
                        </div>
                        <div class="textsmallwhinte floorsFromToSearch">
                            <div><input type="checkbox" id="n_f" value="not_first" name="n_f"><label for="n_f" class="textsmallwhinte">- не первый</label></div>
                            <div><input type="checkbox" value="not_last" name="n_l" id="n_l"><label for="n_l" class="textsmallwhinte">- не последний</label></div>
                        </div>
                        <div class="forLine2"><img src="<?php echo skin_url('line_go.png') ?>"></div>
                    </div>
                    <div class="clearfix">
                        <div class="">
                            <div class="textwhinte sort sortSearch">
                                <label for="sorted">Сортировать:</label>
                                <div class="sortSearch">
                                    <select id="sorted" class="but1" name="sorted">
                                        <option selected="" value="area">По районам </option>
                                        <option value="price">По цене</option>
                                    </select>
                                </div>
                            </div>
                            <div class="textwhinte price priceSearch">
                                <div><strong>Цена (у.е.):</strong></div>
                                <div class="textsmallwhinte">
                                    <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                                    <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                                </div>
                            </div>
                        </div>
                        <div class="forLine2">
                            <img src="<?php echo skin_url('line_go.png') ?>">
                        </div>
                    </div>
                    <div class="clearfix textsmallwhinte">
                        <div class="textwhinte">Районы:</div>
                        <div class="textsmallwhinte">
                            <div><input type="radio" checked="" value="city" name="gr" id="city">
                                <label for="city" class="textsmallwhinte">- только город</label>
                                <input type="radio" value="при" name="gr" id="при">
                                <label for="при" class="textsmallwhinte">- только пригород</label></div>
                            <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                                <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                        </div>
                        <div class="">
                            <div class="areas3">
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                            </div>
                            <div class="areas3">
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                                <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                            </div>
                        </div>
                        <div class="forLine2">
                            <img src="<?php echo skin_url('line_go.png') ?>">
                        </div>
                    </div>
                    <div class="buttonSearch textsmallwhinte clearfix">
                        <input type="image" src="<?php echo skin_url('5_3.gif') ?>" alt="Поиск" name="imageField">
                    </div>
                </div>
        </form>
    </div>
</div>
<!--Начало контентной части отображения фильтра КОМНАТЫ В ОБЩЕЖИТИИ-->
<div class="" id="room" style="display:none;">
    <form name="room" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
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
                    <div class="forLine2">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="textwhinte floors floorsSearch"><span>Этаж:</span>
                        <div class="textsmallwhinte floorsFromTo">
                            <label for="floor_from" class="textsmallwhinte">от:</label><input type="text" id="floor_from" size="5" class="but1" name="floor_from">
                            <label for="floor_to" class="textsmallwhinte" >до:</label><input type="text" id="floor_to" size="5" class="but1" name="floor_to">
                        </div>
                    </div>
                    <div class="textsmallwhinte floorsFromToSearch">
                        <div><input type="checkbox" id="n_f" value="not_first" name="n_f"><label for="n_f" class="textsmallwhinte">- не первый</label></div>
                        <div><input type="checkbox" value="not_last" name="n_l" id="n_l"><label for="n_l" class="textsmallwhinte">- не последний</label></div>
                    </div>
                    <div class="forLine2"><img src="<?php echo skin_url('line_go.png') ?>"></div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort sortSearch">
                        <label for="sorted">Сортировать:</label>
                        <div class="sortSearch">
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price priceSearch">
                        <div><strong>Цена (у.е.):</strong></div>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine2">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <div><input type="radio" checked="" value="city" name="gr" id="city">
                        <label for="city" class="textsmallwhinte">- только город</label>
                        <input type="radio" value="при" name="gr" id="при">
                        <label for="при" class="textsmallwhinte">- только пригород</label></div>
                    <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                        <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                </div>
                <div class="">
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                    </div>
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine2">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра  Дома-->
<div class="" id="house" style="display:none;">
    <form name="house" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
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
                            <div><select id="count_room" class="but1" name="count_room">
                                <option selected="" value="all">Любое</option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                            </select></div>
                        </div>
                        <div class="roomsTypes">
                            <label for="type_room">Тип комнат:</label>
                            <select id="type_room" class="but1 typeRoomSearch" name="type_room">
                                <option selected="" value="all">Все</option>
                                <option value="р">Р</option>
                                <option value="см">См</option>
                                <option value="см/р">См/р</option>
                                <option value="р/расп">р/расп</option>
                                <option value="расп">расп</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine2">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort sortSearch">
                        <label for="sorted">Сортировать:</label>
                        <div class="sortSearch">
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price priceSearch">
                        <div><strong>Цена (у.е.):</strong></div>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine2">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <div><input type="radio" checked="" value="city" name="gr" id="city">
                        <label for="city" class="textsmallwhinte">- только город</label>
                        <input type="radio" value="при" name="gr" id="при">
                        <label for="при" class="textsmallwhinte">- только пригород</label></div>
                    <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                        <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                </div>
                <div class="">
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                    </div>
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine2">
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
<div class="" id="parthouse" style="display:none;">
    <form name="parthouse" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
        <input type="hidden" value="parthouse" name="real_estate">
        <div class="">
            <div class="">
                <div class="clearfix">
                    <div class="textwhinte">
                        <div class="materials">
                            <label for="material">Материал дома:</label>
                            <select id="material" class="but1 typeRoomSearch" name="material">
                                <option value="all">Любой</option>
                                <option value="к">Кирпич</option>
                                <option value="п">Панель</option>
                                <option value="дк">Дерево</option>
                            </select>
                        </div>
                        <div class="rooms">
                            <label for="count_room">Количество комнат:</label>
                            <div><select id="count_room" class="but1" name="count_room">
                                <option selected="" value="all">Любое</option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                            </select></div>
                        </div>
                        <div class="roomsTypes">
                            <label for="type_room">Тип комнат:</label>
                            <select id="type_room" class="but1 typeRoomSearch" name="type_room">
                                <option selected="" value="all">Все</option>
                                <option value="р">Р</option>
                                <option value="см">См</option>
                                <option value="см/р">См/р</option>
                                <option value="р/расп">р/расп</option>
                                <option value="расп">расп</option>
                            </select>
                        </div>
                    </div>
                    <div class="forLine2">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort sortSearch">
                        <label for="sorted">Сортировать:</label>
                        <div class="sortSearch">
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price priceSearch">
                        <div><strong>Цена (у.е.):</strong></div>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine2">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <div><input type="radio" checked="" value="city" name="gr" id="city">
                        <label for="city" class="textsmallwhinte">- только город</label>
                        <input type="radio" value="при" name="gr" id="при">
                        <label for="при" class="textsmallwhinte">- только пригород</label></div>
                    <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                        <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                </div>
                <div class="">
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                    </div>
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine2">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра  Дачи-->
<div class="" id="cottage" style="display:none;">
    <form name="cottage" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
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
                    <div class="forLine2">
                        <img src="<?php echo skin_url('line_go.png') ?>">
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort sortSearch">
                        <label for="sorted">Сортировать:</label>
                        <div class="sortSearch">
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price priceSearch">
                        <div><strong>Цена (у.е.):</strong></div>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine2">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <div><input type="radio" checked="" value="city" name="gr" id="city">
                        <label for="city" class="textsmallwhinte">- только город</label>
                        <input type="radio" value="при" name="gr" id="при">
                        <label for="при" class="textsmallwhinte">- только пригород</label></div>
                    <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                        <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                </div>
                <div class="">
                    <div class="areas3">
                        <div><input type="checkbox" value="Барашевский" name="region[]" id="region13"><label for="region13" class="textsmallwhinte">Барашевский массив</label></div>
                        <div><input type="checkbox" value="Бобровский" name="region[]" id="region14"><label for="region14" class="textsmallwhinte">Бобровский массив</label></div>
                        <div><input type="checkbox" value="Вильский" name="region[]" id="region15"><label for="region15" class="textsmallwhinte">Вильский массив</label></div>
                        <div><input type="checkbox" value="Давыдовский" name="region[]" id="region16"><label for="region16" class="textsmallwhinte">Давыдовский массив</label></div>
                        <div><input type="checkbox" value="Тетеревский" name="region[]" id="region17"><label for="region17" class="textsmallwhinte">Тетеревский массив</label></div>
                        <div><input type="checkbox" value="Новогуйвинск" name="region[]" id="region18"><label for="region18" class="textsmallwhinte">Новогуйвинск массив</label></div>
                    </div>
                    <div class="areas3">
                        <div><input type="checkbox" value="Пряжев" name="region[]" id="region19"><label for="region19" class="textsmallwhinte">Пряжев массив</label></div>
                        <div><input type="checkbox" value="Соколовский" name="region[]" id="region20"><label for="region20" class="textsmallwhinte">Соколовский массив</label></div>
                        <div><input type="checkbox" value="Станишовский" name="region[]" id="region21"><label for="region21" class="textsmallwhinte">Станишовский массив</label></div>
                        <div><input type="checkbox" value="Березовский" name="region[]" id="region22"><label for="region22" class="textsmallwhinte">Березовский массив</label></div>
                        <div><input type="checkbox" value="other" name="region[]" id="region23"><label for="region23" class="textsmallwhinte">Другие массив</label></div>
                    </div>
                </div>
                <div class="forLine2">
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
<div class="" id="plot" style="display:none;">
    <form name="plot" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
        <input type="hidden" value="plot" name="real_estate">
        <div class="">
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort sortSearch">
                        <label for="sorted">Сортировать:</label>
                        <div class="sortSearch">
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price priceSearch">
                        <div><strong>Цена (у.е.):</strong></div>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine22">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <div><input type="radio" checked="" value="city" name="gr" id="city">
                        <label for="city" class="textsmallwhinte">- только город</label>
                        <input type="radio" value="при" name="gr" id="при">
                        <label for="при" class="textsmallwhinte">- только пригород</label></div>
                    <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                        <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                </div>
                <div class="">
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                    </div>
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine22">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Начало контентной части отображения фильтра  Коммерческая недв.-->
<div class="" id="industry" style="display:none;">
    <form name="industry" enctype="multipart/form-data" method="GET" action="<?php echo base_url('search') ; ?>">
        <input type="hidden" value="industry" name="real_estate">
        <div class="">
            <div class="">
                <div class="textwhinte">Тип:</div>
                <div class="">
                    <select id="type_estate" class="but1" name="type_estate">
                        <option value="all">Вся недвижимость</option>
                        <option value="под офис">Под офис</option>
                        <option value="магазин">Под магазин</option>

                    </select>
                </div>
                <div class="forLine22">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix">
                <div class="">
                    <div class="textwhinte sort sortSearch">
                        <label for="sorted">Сортировать:</label>
                        <div class="sortSearch">
                            <select id="sorted" class="but1" name="sorted">
                                <option selected="" value="area">По районам </option>
                                <option value="price">По цене</option>
                            </select>
                        </div>
                    </div>
                    <div class="textwhinte price priceSearch">
                        <div><strong>Цена (у.е.):</strong></div>
                        <div class="textsmallwhinte">
                            <label for="price_from" class="textsmallwhinte">от:</label><input type="text" id="price_from" size="5" class="but1" name="price_from">
                            <label for="price_to" class="textsmallwhinte">до:</label><input type="text" id="price_to" size="5" class="but1" name="price_to">
                        </div>
                    </div>
                </div>
                <div class="forLine22">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="clearfix textsmallwhinte">
                <div class="textwhinte">Районы:</div>
                <div class="textsmallwhinte">
                    <div><input type="radio" checked="" value="city" name="gr" id="city">
                        <label for="city" class="textsmallwhinte">- только город</label>
                        <input type="radio" value="при" name="gr" id="при">
                        <label for="при" class="textsmallwhinte">- только пригород</label></div>
                    <div><input type="radio" id="select_rayon_flat" value="select_rayon" name="gr">
                        <label for="select_rayon_flat" class="textsmallwhinte">- только выб. районы</label></div>
                </div>
                <div class="">
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region01" value="ц" name="region[]"><label for="region01" class="textsmallwhinte">Центр</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region02" value="бог" name="region[]"><label for="region02" class="textsmallwhinte">Богуния</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region03" value="бум" name="region[]"><label for="region03" class="textsmallwhinte">Бум.фабрика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region04" value="кор" name="region[]"><label for="region04" class="textsmallwhinte">Корбутовка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region05" value="кро" name="region[]"><label for="region05" class="textsmallwhinte">Крошня</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region06" value="мал" name="region[]"><label for="region06" class="textsmallwhinte">Малёванка</label></div>
                    </div>
                    <div class="areas3">
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region07" value="мар" name="region[]"><label for="region07" class="textsmallwhinte">Марьяновка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region08" value="пол" name="region[]"><label for="region08" class="textsmallwhinte">Полевая</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region09" value="па" name="region[]"><label for="region09" class="textsmallwhinte">Промавтоматика</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region10" value="смо" name="region[]"><label for="region10" class="textsmallwhinte">Смоковка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region11" value="смл" name="region[]"><label for="region11" class="textsmallwhinte">Смолянка</label></div>
                        <div><input type="checkbox" onclick="change_on_region('select_rayon_flat')" id="region12" value="при" name="region[]"><label for="region12" class="textsmallwhinte">Пригород</label></div>
                    </div>
                </div>
                <div class="forLine22">
                    <img src="<?php echo skin_url('line_go.png') ?>">
                </div>
            </div>
            <div class="buttonSearch textsmallwhinte clearfix">
                <input type="image" src="<?php echo skin_url('5_3.gif') ?>" name="imageField">
            </div>
        </div>
    </form>
</div>
<!--Конец контента на выборку информации-->
</div>
</div>
<div class="searchBottom"></div>
</div>
</div>
<div class="searchContentMain">
    <div class="searchContent">
        <?php if (isset($data['items']) and !empty($data['items'])) : ?>
            <?php $i = 0 ; ?>
            <div class="allitems">
            <ul>
            <?php foreach ($data['items'] as $item) : ?>
                    <li class="item<?php echo $item->entity_id ?>">
                        <div class="itemLeftBorder"></div>
                        <div class="numbers_info">
                            <div class="number podcherkivanie"><?php echo '№ '.$item->entity_id ?></div>
                            <div class="numbers_info_foto">
                                <?php if ($item->image) : ?>
                                    <ul class="galery" style="display:none;" id="<?php echo $item->entity_id ?>">
                                        <?php  foreach ($item->image as $image) : ?>
                                            <li>
                                                <img src="<?php echo skin_url('sales/' . $image) ?>"/>
                                            </li>
                                        <?php  endforeach; ?>
                                    </ul>
                                <a href="#" data-galery= "<?php echo $item->entity_id ?>">FOTO</a>
                                <?php  endif; ?>
                            </div>
                        </div>
                         <?php $material = array('к'=>'кирпичь','п'=>'панель','дк'=>'дерево-кирпичь')?>
                        <div class="basis_info">
                            <div class="basis_info_a">
                                <?php if (!empty($item->count_room)): ?>
                                <span>Комн.: &nbsp<?php echo $item->count_room ?></span>
                                <?php endif;?>

                                <span>Ул.: <strong>&nbsp<?php echo $item->street ?></strong></span>
                                <span>М²: &nbsp<?php echo $item->total_area.'/'.$item->living_area.'/'.$item->kitchen_area ?></span>
                                <?php if (!empty($item->type_room) and $item->type_room !='.'): ?>
                                    <span>Тип комн: <?php echo $item->type_room ?></span>
                                <?php endif;?>

                                <?php if($item->real_estate > 0): ?>
                                    <span>Этаж: <?php echo $item->real_estate ?></span>
                                 <?php endif;?>
                                <?php if (!empty($item->material)): ?>
                                    <span>Мат:  <?php echo $material[$item->material] ?></span></br>
                                <?php endif;?>
                            </div>
                            <div class="basis_info_b">
                                <p><?php echo $item->description ?></p>
                            </div>
                        </div>

                        <div class="price_info">
                              <div class="price_info_a">Цена:</div>
                              <div class="price_info_b"><strong><?php echo $item->price ?>&nbspу.е.</strong></div>
                        <div>
                        <div class="itemRightBorder"></div>

                    </li>
            <?php endforeach; ?>

             </ul>
            </div >
                <div class="buffer"><!----></div>
            <?php if (isset($data['pagination'])) : ?>
                    <?php echo $data['pagination']; ?>
                <?php endif; ?>
            <?php else : ?>
                <div>По запросу найдено 0 товаров</div>
        <?php endif; ?>



    </div>

    <script type="text/javascript">
          $(document).ready(function(){
                 i=0;
             $('.allitems li').each(function(){

                 if ($(this).parent().hasClass('galery')) {
                     return true;
                 }

                  if(i%2 == 0){
                      $(this).addClass('characteristicsBackgr');
                  }
                  i++;
              });
          })
      </script>
</div>