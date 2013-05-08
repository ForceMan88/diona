<div class="page">
    <div class="contentleft"></div>
    <div class="content">
        <div class="application textbalck">
<!--            <h1 class="zaglavst">Размещение заявки</h1>-->
            <div>
                <?php echo form_open('demand',array('method'=>'post')); ?>

                    <div class="textbalck application_form">
                        <?php echo form_label('Я хочу:', 'action'); ?>
                            <select name="action" class="but2" id="action">
                                <option value="one" <?php echo set_select('action', 'Продам', TRUE); ?> >Купить</option>
                                <option value="two" <?php echo set_select('action', 'Продам'); ?> >Продать</option>
                                <option value="three" <?php echo set_select('action', 'Сниму'); ?> >Снять</option>
                                <option value="three" <?php echo set_select('action', 'Сдам'); ?> >Сдать</option>
                            </select>
                        <?php echo form_label('Ваше имя:', 'first_name'); ?>
                        <?php echo form_input(array('name'=>'first_name','class'=>"but2",'size'=>'27','id'=>"first_name"), set_value('first_name')); ?>

                    </div>
                    <div class="textbalck application_form">
                        <label for="object">Объект недвижимости:</label>
                        <select name="object" class="but2" id="object">
                            <option value="empty" selected=""> Выберите вариант </option>
                            <option value="Квартира"> Квартира </option>
                            <option value="Комната"> Комната </option>
                            <option value="Новостройка"> Новостройка </option>
                            <option value="Дом"> Дом </option>
                            <option value="Дача"> Дача </option>
                            <option value="Коммерческая недв."> Коммерческая недвижимость
                            </option>
                        </select>
                        <?php echo form_label('Ваш телефон:', 'phone'); ?>
                        <?php echo form_input(array('name'=>'phone','class'=>"but2",'size'=>'35','id'=>"phone"), set_value('phone')); ?>
                    </div>
                    <div class="textbalck clearfix">
                        <?php echo form_label('Ваше e-mail:', 'email'); ?>
                        <?php echo form_input(array('name'=>'email','class'=>"but2",'size'=>'30'), set_value('email')); ?>
                    </div>
                    <div class="textbalck clearfix">
                        <?php echo form_label('<strong>Дополнительная информация:</strong>', 'description'); ?>
                        <?php echo form_textarea(array('name'=>'description','cols'=>'87','class'=>"but2",'rows'=>'6'), set_value('description'))  ?>
                    </div>
                    <div class="for_password clearfix">
                        <div class="password_options2">
                            <table class="textbalck">
                                <tbody>
                                <tr>
                                    <td><?php echo $data['image'] ?></td>
                                    <td></td>
                                    <td>Введите код на рисунке, для подтверждения отправки</td>
                                    <td>
                                        <div class="password_options">
                                            <?php echo form_input(array('name'=>'captcha','class'=>"but2",'size'=>'10')); ?>
                                            <?php echo form_submit(array('name'=>'send','class'=>"but2",'id'=>'send'), 'Отправить'); ?>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
                <div class="error">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bufer"><!----></div>
</div>
