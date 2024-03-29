<div class="wt-userrating wt-userratingvtwo">
    <div class="wt-ratingtitle">
       <h3><?php echo e(!empty($symbol) ? $symbol['symbol'] : '$'); ?><?php echo e($service->price); ?></h3>
       <span><?php echo e(trans('lang.starting_from')); ?></span>
    </div>
    <div class="wt-rating-info">
       <ul class="wt-service-info">
          <li>
             <span><i class="fa fa-calendar-check-o iconcolor1"></i>
             <strong><?php echo e($delivery_time->title); ?></strong> &nbsp;<?php echo e(trans('lang.delivery_time')); ?></span>
          </li>
          <li>
             <span><i class="fa fa-search iconcolor2"></i><strong><?php echo e($service->views); ?></strong>&nbsp;<?php echo e(trans('lang.views')); ?></span>
          </li>
          <li>
             <span><i class="fa fa-shopping-basket iconcolor3"></i><strong><?php echo e(Helper::getServiceCount($service->id, 'completed')); ?></strong>&nbsp;<?php echo e(trans('lang.sales')); ?></span>
          </li>
          <li>
             <span><i class="fa fa-clock-o iconcolor4"></i><strong><?php echo e($response_time->title); ?></strong>&nbsp;<?php echo e(trans('lang.response_time')); ?></span>
          </li>
       </ul>

      <hire-freelancer
         :next_available_date="'<?php echo e($nextAvailableDate); ?>'"
         :service="<?php echo e($service); ?>"
         :service_note="'<?php echo e(trans('lang.service_note')); ?>'"
         :hire_service_title="'<?php echo e(trans('lang.hire_service_title')); ?>'" 
         :hire_service_text="'<?php echo e(trans('lang.hire_service_text')); ?>'"
         :buy_now="'<?php echo e(trans('lang.buy_now')); ?>'">
      </hire-freelancer>
      
    </div>
 </div>