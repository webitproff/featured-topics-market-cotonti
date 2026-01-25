`market.edit.tpl`

```
<!-- IF {PHP|cot_plugin_active('featuredtopicsmarket')} -->
	<!-- IF {PHP|cot_auth('plug', 'featuredtopicsmarket', 'W')} -->
		{RECOMMENDED_FR_TOPIC_MARKET_EDIT_TOPIC} 
	<!-- ENDIF -->
<!-- ENDIF -->
<hr>
```

`market.tpl`

```
<!-- IF {PHP|cot_plugin_active('featuredtopicsmarket')} AND {RECOMMENDED_FR_TOPIC_MARKET_TOPICS_TRUE} -->
{RECOMMENDED_FR_TOPIC_MARKET_TOPICS}
<!-- ENDIF -->
```