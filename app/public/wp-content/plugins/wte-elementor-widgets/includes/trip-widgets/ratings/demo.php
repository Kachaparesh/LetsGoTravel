<?php
/**
 * Ratings WWidget Demo Template.
 *
 * @since 1.3.0
 * @package wptraelengine-elementor-widgets
 */

?>
<div class="post-data">
	<div class="content">
		<div class="aggregate-rating">
			<span class="stars">
				<span class="rating-star">
					<div class="wpte-trip-review-stars">
						<div class="stars-group-wrapper">
							<div class="stars-placeholder-group">
								<?php
								for ( $x = 0; $x < 5; $x++ ) {
									?>
										<svg width="15" height="15" viewBox="0 0 15 15" fill="none">
									<path
										d="M6.41362 0.718948C6.77878 -0.0301371 7.84622 -0.0301371 8.21138 0.718948L9.68869 3.74946C9.83326 4.04602 10.1148 4.25219 10.4412 4.3005L13.7669 4.79272C14.5829 4.91349 14.91 5.91468 14.3227 6.49393L11.902 8.88136C11.6696 9.1105 11.5637 9.4386 11.6182 9.76034L12.1871 13.1191C12.3258 13.9378 11.464 14.559 10.7311 14.1688L7.78252 12.5986C7.4887 12.4421 7.1363 12.4421 6.84248 12.5986L3.89386 14.1688C3.16097 14.559 2.29922 13.9378 2.43789 13.1191L3.0068 9.76034C3.06129 9.4386 2.95537 9.1105 2.72303 8.88136L0.302324 6.49393C-0.285 5.91468 0.0420871 4.91349 0.85811 4.79272L4.18383 4.3005C4.5102 4.25219 4.79174 4.04602 4.93631 3.74946L6.41362 0.718948Z"
										fill="#EBAD34"></path>
								</svg>
									<?php
								};
								?>
							</div>
							<div class="stars-rated-group" style="width: 100%">
								<?php
								for ( $x = 0; $x < 5; $x++ ) {
									?>
										<svg width="15" height="15" viewBox="0 0 15 15" fill="none">
									<path
										d="M6.41362 0.718948C6.77878 -0.0301371 7.84622 -0.0301371 8.21138 0.718948L9.68869 3.74946C9.83326 4.04602 10.1148 4.25219 10.4412 4.3005L13.7669 4.79272C14.5829 4.91349 14.91 5.91468 14.3227 6.49393L11.902 8.88136C11.6696 9.1105 11.5637 9.4386 11.6182 9.76034L12.1871 13.1191C12.3258 13.9378 11.464 14.559 10.7311 14.1688L7.78252 12.5986C7.4887 12.4421 7.1363 12.4421 6.84248 12.5986L3.89386 14.1688C3.16097 14.559 2.29922 13.9378 2.43789 13.1191L3.0068 9.76034C3.06129 9.4386 2.95537 9.1105 2.72303 8.88136L0.302324 6.49393C-0.285 5.91468 0.0420871 4.91349 0.85811 4.79272L4.18383 4.3005C4.5102 4.25219 4.79174 4.04602 4.93631 3.74946L6.41362 0.718948Z"
										fill="#EBAD34"></path>
								</svg>
									<?php
								};
								?>
								
							</div>
						</div>
					</div>
				</span>
				<span class="review-based-on-wrap">
					<?php esc_attr_e( '5.0 - Based on', 'wptravelengine-elementor-widgets' ); ?>						
					<span>
						<?php esc_attr_e( '1 travel review', 'wptravelengine-elementor-widgets' ); ?>						
					</span>
				</span>
			</span>
		</div>
	</div>
</div>
<?php
