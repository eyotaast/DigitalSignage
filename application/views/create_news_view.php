                <h2 class="sub-header">Create a News Post</h2>
                <div>
                    <?php echo form_open('home/create_news') ?>

                        <p><input class="form-control" type="input" name="title" value="<?php echo set_value('title'); ?>" placeholder="News Title" /></p>
                        <p><textarea class="form-control" rows="15" name="content" value="<?php echo set_value('content'); ?>" placeholder="News Content"></textarea></p>
                        <p><input class="form-control" type="input" name="author" value="<?php echo set_value('author'); ?>" placeholder="Post Author" /></p>
                        <p><input class="button" type="submit" name="submit" value="Create news entry" /></p>
                    </form>
                </div>

                <hr>