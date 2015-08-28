
            <div class="innerpages_sub">
              <div class="innerpage_txt">
         
                <?php foreach($testimonials as $t): ?>
                <strong><?php echo $t->first_name . ' ' . $t->last_name; ?></strong>
                <p><?php echo $t->content?></p>
                <?php endforeach; ?>

              </div>
            </div>

 