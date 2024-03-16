<div class="diplomBox">
    <section class="sectionDiplom">
        <form action="lk-diplom-action.php" method="post">
            <p>
                <input name="surname" type="text" placeholder="<?php echo $surname; ?>" readonly>
            </p>
            <p>
                <input name="name" type="text" placeholder="<?php echo $name; ?>" readonly>
            </p>
            <p>
                <input name="patronymic" type="text" placeholder="<?php echo $patronymic; ?>" readonly>
            </p>
            <p>
                <input name="group" type="text" placeholder="<?php echo $groupname; ?>" readonly>
            </p>
            <p>
                <input name="course" type="text" placeholder="<?php echo $course; ?>" readonly>
            </p>
            <p>
                <input name="faculty" type="text" placeholder="<?php echo $facultyname; ?>" readonly>
            </p>
            <p>
                <input name="decan" type="text" placeholder="<?php echo "Декан"; ?>" readonly>
            </p>
            <p>
                <input name="vkrtheme" type="text" placeholder="<?php echo $topic_name; ?>" readonly>
            </p>
            <p>
                <input name="vkrruler" type="text" placeholder="<?php echo $professorname; ?>" readonly>
            </p>
            <p>
                <input name="cathedra" type="text" placeholder="<?php echo "Кафедра"; ?>" readonly>
            </p>
            <p>
                <input name="cathedrahead" type="text" placeholder="<?php echo "Зав.кафедры"; ?>" readonly>
            </p>
            <button name="submitDiplom" id="submitDiplom" type="submit">
                Применить
            </button>
        </form>
    </section>
    <p class="support_msg">
        <?php echo ($_GET['support_msg']); ?>
    </p>
</div>