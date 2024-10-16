<div class="wrap">
    <h1>تنظیمات پلاگین</h1>
    <form action="" method="post">
        <label for="is_plugin_active">
            <input name="is_plugin_active" type="checkbox" id="is_plugin_active"
            <?php echo isset($current_plugin_status) && intval($current_plugin_status) > 0 ? 'checked' : '' ?>
            >
            فعال بودن پلاگین
        </label>
        <button name="saveSettings" class="button button-primary" type="submit">ذخیره سازی</button>    
    </form>
</div>