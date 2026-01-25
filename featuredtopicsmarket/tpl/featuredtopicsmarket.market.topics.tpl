<!-- BEGIN: MAIN -->
<div class="py-3">
<div class="alert alert-success"><h3 class="fs-6 my-0">{PHP.L.featuredtopicsmarket_market_title}</h3></div>
	<div class="list-group list-group-striped list-group-flush">
		<!-- BEGIN: RECOMMENDED_FR_TOPIC_MARKET_ROW -->
		<div class="list-group-item list-group-item-action px-0">
			<div class="d-flex flex-column flex-md-row gap-3 align-items-center">
				<!-- IF {RECOMMENDED_FR_TOPIC_MARKET_ROW_LINK_MAIN_IMAGE} -->
				<a href="{RECOMMENDED_FR_TOPIC_MARKET_ROW_URL}" class="">
					<img
					src="{RECOMMENDED_FR_TOPIC_MARKET_ROW_LINK_MAIN_IMAGE}"
					alt="{RECOMMENDED_FR_TOPIC_MARKET_ROW_TITLE}"
					class="img-fluid rounded d-block mx-auto"
					style="object-fit:cover;
					width:100px;
					max-height:120px;
					height:auto;"
					>
				</a>
				<!-- ENDIF -->
				<div class="flex-grow-1 d-flex flex-column justify-content-center">
					<a href="{RECOMMENDED_FR_TOPIC_MARKET_ROW_URL}" class="text-decoration-none">
						<p class="mb-1 fw-semibold">
							{RECOMMENDED_FR_TOPIC_MARKET_ROW_TITLE}
						</p>
					</a>
					<div class="mb-1">
						<div>
						<small class="text-secondary">
							<!-- IF {RECOMMENDED_FR_TOPIC_MARKET_ROW_DESC} -->
							{RECOMMENDED_FR_TOPIC_MARKET_ROW_DESC}
							<!-- ELSE -->
							{RECOMMENDED_FR_TOPIC_MARKET_ROW_PREVIEW}
							<!-- ENDIF -->
						</small>
						</div>
						<small class="text-secondary">#{RECOMMENDED_FR_TOPIC_MARKET_ROW_ID} | Постов: {RECOMMENDED_FR_TOPIC_MARKET_ROW_POSTCOUNT} | Просмотров: {RECOMMENDED_FR_TOPIC_MARKET_ROW_VIEWCOUNT}</small>
					</div>
					<div>
						<small>
							<a href="{RECOMMENDED_FR_TOPIC_MARKET_ROW_CAT_URL}">
								{RECOMMENDED_FR_TOPIC_MARKET_ROW_CAT_TITLE}
							</a>
						</small>
					</div>
				</div>
			</div>
		</div>
		<!-- END: RECOMMENDED_FR_TOPIC_MARKET_ROW -->
	</div>
</div>
<!-- END: MAIN -->
/**
 * featuredtopicsmarket.market.topics.tpl - Template File for the Plugin Recommended Forum Topics in Market Item
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+ 
 * Filename: featuredtopicsmarket.market.topics.tpl
 *
 * Date: Jan 23Th, 2026 
 * @package featuredtopicsmarket 
 * @version 2.7.7 
 * @author webitproff 
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff 
 * @license BSD 
 */

