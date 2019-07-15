<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>API</title><style>
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

html,
body {
	margin: 0;
	padding: 0;
}
@media only screen {
	body {
		margin: 2em auto;
		max-width: 900px;
		color: rgb(55, 53, 47);
	}
}

body {
	line-height: 1.5;
	white-space: pre-wrap;
}

a,
a.visited {
	color: inherit;
	text-decoration: underline;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	text-indent: -1.7em;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 85%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark-href {
	font-size: 0.75em;
	opacity: 0.5;
}

.sans { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, KaiTi, STKaiTi, '华文楷体', KaiTi_GB2312, '楷体_GB2312', serif; }
.mono { font-family: Nitti, 'Microsoft YaHei', '微软雅黑', monospace; }
.pdf .sans { font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC', 'Noto Sans CJK KR'; }

.pdf .code { font-family: Source Code Pro, 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC', 'Noto Sans Mono CJK KR'; }

.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, KaiTi, STKaiTi, '华文楷体', KaiTi_GB2312, '楷体_GB2312', serif, 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC', 'Noto Sans CJK KR'; }

.pdf .mono { font-family: PT Mono, Nitti, 'Microsoft YaHei', '微软雅黑', monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC', 'Noto Sans Mono CJK KR'; }

.highlight-default {
}
.highlight-gray {
	color: rgb(155,154,151);
}
.highlight-brown {
	color: rgb(100,71,58);
}
.highlight-orange {
	color: rgb(217,115,13);
}
.highlight-yellow {
	color: rgb(223,171,1);
}
.highlight-teal {
	color: rgb(15,123,108);
}
.highlight-blue {
	color: rgb(11,110,153);
}
.highlight-purple {
	color: rgb(105,64,165);
}
.highlight-pink {
	color: rgb(173,26,114);
}
.highlight-red {
	color: rgb(224,62,62);
}
.highlight-gray_background {
	background: rgb(235,236,237);
}
.highlight-brown_background {
	background: rgb(233,229,227);
}
.highlight-orange_background {
	background: rgb(250,235,221);
}
.highlight-yellow_background {
	background: rgb(251,243,219);
}
.highlight-teal_background {
	background: rgb(221,237,234);
}
.highlight-blue_background {
	background: rgb(221,235,241);
}
.highlight-purple_background {
	background: rgb(234,228,242);
}
.highlight-pink_background {
	background: rgb(244,223,235);
}
.highlight-red_background {
	background: rgb(251,228,228);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(55, 53, 47, 0.6);
	fill: rgba(55, 53, 47, 0.6);
}
.block-color-brown {
	color: rgb(100,71,58);
	fill: rgb(100,71,58);
}
.block-color-orange {
	color: rgb(217,115,13);
	fill: rgb(217,115,13);
}
.block-color-yellow {
	color: rgb(223,171,1);
	fill: rgb(223,171,1);
}
.block-color-teal {
	color: rgb(15,123,108);
	fill: rgb(15,123,108);
}
.block-color-blue {
	color: rgb(11,110,153);
	fill: rgb(11,110,153);
}
.block-color-purple {
	color: rgb(105,64,165);
	fill: rgb(105,64,165);
}
.block-color-pink {
	color: rgb(173,26,114);
	fill: rgb(173,26,114);
}
.block-color-red {
	color: rgb(224,62,62);
	fill: rgb(224,62,62);
}
.block-color-gray_background {
	background: rgb(235,236,237);
}
.block-color-brown_background {
	background: rgb(233,229,227);
}
.block-color-orange_background {
	background: rgb(250,235,221);
}
.block-color-yellow_background {
	background: rgb(251,243,219);
}
.block-color-teal_background {
	background: rgb(221,237,234);
}
.block-color-blue_background {
	background: rgb(221,235,241);
}
.block-color-purple_background {
	background: rgb(234,228,242);
}
.block-color-pink_background {
	background: rgb(244,223,235);
}
.block-color-red_background {
	background: rgb(251,228,228);
}

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}
	
</style></head><body><article id="ea6d825f-1314-41b2-8477-0acd645b65e9" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/nasa_space_shuttle_columbia.jpg" style="object-position:center 30.000000000000004%"/><div class="page-header-icon page-header-icon-with-cover"><img class="icon" src="data:image/png;base64,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"/></div><h1 class="page-title">API</h1></header><div class="page-body"><h1 id="e727225e-534f-43d5-90e5-5916eb1bab2e" class="">MyCards API</h1><hr id="804af8c0-7650-4027-984d-2d579015e50f"/><p id="9fc27952-d7b3-4f84-ad02-229f2e59eb87" class="">De modo a poder haver comunicação entre os vários dispositivos do projeto Mobile e Web, decidimos criar uma <strong>REST API</strong> em PHP. </p><p id="7d3f99cc-5e26-4d2a-ba6b-9f696ad7eecd" class="">Escolhemos <strong>REST API</strong> porque é a forma mais leve de <em>criar</em>, <em>ler</em>, <em>atualizar</em> ou de <em>apagar</em> informação entre várias aplicações pela internet.</p><h1 id="19f23f6d-6f74-4a6d-a68c-0047746ad498" class="">API Usage</h1><hr id="8abb3e6b-3068-447d-b3cc-866659c305c2"/><h2 id="253948b1-1120-4875-8e0c-644d532a23d6" class="">Empresas</h2><hr id="c9b82561-e9de-41d4-bfca-c9d15835a4e4"/><h3 id="8ce36ec9-a8c2-4aab-864c-75397beeabc8" class="">Todas as informações das empresas</h3><ul id="001975a5-6579-4d71-9192-7d2ccc60aa86" class="bulleted-list"><li><strong>Descrição</strong>: Devolve todas as empresas que estão registadas.</li></ul><ul id="55251c5a-3860-4eb6-95c0-1ff3e259fd28" class="bulleted-list"><li><strong>Endpoint Path:</strong><code>GET /api/empresa</code></li></ul><ul id="874fd435-4cd6-4291-92bf-0672c0d8b518" class="bulleted-list"><li><strong>Returns</strong>:</li></ul><pre id="687c9608-f241-47de-b977-bc41f31a31a8" class="code"><code>{
	&quot;ID_Empresa&quot;: &quot;1&quot;,
        &quot;Email&quot;: &quot;business@brenosalles.com&quot;,
        &quot;Localizacao&quot;: &quot;Viseu&quot;,
        &quot;DataRegisto&quot;: &quot;2019-07-06 11:28:49&quot;,
        &quot;Ativo&quot;: &quot;1&quot;,
        &quot;Nome&quot;: &quot;Empresa do Breno&quot;,
        &quot;NIF&quot;: &quot;507123456&quot;,
        &quot;TipoEmpresa&quot;: &quot;3&quot;,
        &quot;Facebook&quot;: &quot;https://facebook.com/guergeiro&quot;,
        &quot;Twitter&quot;: null,
        &quot;LinkedIn&quot;: null,
        &quot;AreaInteresse&quot;: &quot;Ciência e Tecnologia&quot;
},
{
        &quot;ID_Empresa&quot;: &quot;2&quot;,
        &quot;Email&quot;: &quot;diogoxd97@hotmail.com&quot;,
        &quot;Localizacao&quot;: &quot;Aveiro&quot;,
        &quot;DataRegisto&quot;: &quot;2019-07-06 15:29:30&quot;,
        &quot;Ativo&quot;: &quot;1&quot;,
        &quot;Nome&quot;: &quot;Diogo Rafael Lourenço Oliveira&quot;,
        &quot;NIF&quot;: &quot;123456789&quot;,
        &quot;TipoEmpresa&quot;: &quot;3&quot;,
        &quot;Facebook&quot;: null,
        &quot;Twitter&quot;: null,
        &quot;LinkedIn&quot;: null,
        &quot;AreaInteresse&quot;: &quot;Restauração&quot;
}
</code></pre><p id="342173e3-f0a4-4935-8ab6-fd70b2f56b18" class="">
</p><h3 id="e772ff1f-6170-4fb0-a17c-8c866c7c6f5f" class="">Informação empresa</h3><ul id="9e68f7c8-4c64-4bb4-8f75-45b269aef353" class="bulleted-list"><li><strong>Descrição:</strong> Devolve a informação da empresa com o ID passado.</li></ul><ul id="97f329ae-7fe5-4cd7-8347-b9ac8b694603" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}</code></li></ul><ul id="0bbf74ac-cc75-4c4e-a207-35a38709ecc4" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="0ed8ce20-5ae5-48d5-8f8b-ea24b7e890fb" class="code"><code>{
	&quot;ID_Empresa&quot;: &quot;1&quot;,
  &quot;Email&quot;: &quot;business@brenosalles.com&quot;,
  &quot;Localizacao&quot;: &quot;Viseu&quot;,
  &quot;DataRegisto&quot;: &quot;2019-07-06 11:28:49&quot;,
  &quot;Ativo&quot;: &quot;1&quot;,
  &quot;Nome&quot;: &quot;Empresa do Breno&quot;,
  &quot;NIF&quot;: &quot;507123456&quot;,
  &quot;TipoEmpresa&quot;: &quot;3&quot;,
  &quot;Facebook&quot;: &quot;https://facebook.com/guergeiro&quot;,
  &quot;Twitter&quot;: null,
  &quot;LinkedIn&quot;: null,
  &quot;AreaInteresse&quot;: &quot;Ciência e Tecnologia&quot;
}</code></pre><p id="aeec834b-ad0e-43a3-853d-eaa620eb4147" class="">
</p><h3 id="c8eadbe4-fd93-42e9-9626-b7fb79529269" class="">Rating empresa</h3><ul id="1a87f70e-c06b-4ce9-b4e1-a9bcd3134eda" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todos os rating dados a uma empresa. </li></ul><ul id="a3cb702c-ff10-42c1-9e1d-26b90f0e4314" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/rating</code></li></ul><ul id="c9f5cb1f-f013-46cd-a392-97fdbe2cb68c" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="36233718-002e-4723-ac1b-528a02e2e678" class="code"><code>{
	&quot;ID_Empresa&quot;:&quot;18&quot;,
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;DataRating&quot;:&quot;2019-06-22 15:33:22&quot;,
	&quot;Rating&quot;:&quot;2&quot;
},
{
	&quot;ID_Empresa&quot;:&quot;18&quot;,
	&quot;ID_Cliente&quot;:&quot;2&quot;,
	&quot;DataRating&quot;:&quot;2019-06-22 18:33:22&quot;,
	&quot;Rating&quot;:&quot;4&quot;
}
</code></pre><p id="9f0af80f-15a1-4687-b6dc-b8e640f31f54" class="">
</p><h3 id="10ee05f8-f906-4604-8253-92e10ab21bdf" class="">Rating empresa/cliente </h3><ul id="6393bc6f-3a22-4628-83e1-e5bdd97d8b93" class="bulleted-list"><li><strong>Descrição:</strong> Devolve o rating que a empresa deu a um cliente</li></ul><ul id="21a2d8d5-0c3e-441f-9b80-9349592da15e" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/rating/{ID_Cliente}</code></li></ul><ul id="1d359342-6f9e-45d9-8806-18f0d213fd0b" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="07673c4c-822a-433c-99a4-a7f5a1d2f461" class="code"><code>{
    &quot;status&quot;: &quot;true&quot;,
    &quot;message&quot;: [
        {
            &quot;ID_Empresa&quot;: &quot;1&quot;,
            &quot;ID_Cliente&quot;: &quot;1&quot;,
            &quot;DataRating&quot;: &quot;2019-07-06 19:26:52&quot;,
            &quot;Rating&quot;: &quot;1&quot;
        }
    ]
}</code></pre><p id="7e3676e6-c3c8-40ad-b7af-ecf7e20f8a1c" class="">
</p><h3 id="53c95f82-501f-4eb9-ad7a-354174a40d8b" class="">Campanhas empresa</h3><ul id="8a029c99-5fde-4c8f-9e2d-a691a3852ad6" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todas as campanhas de uma empresa.</li></ul><ul id="bd766637-821e-4635-9317-f8124f68d028" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/campanha</code></li></ul><ul id="2db051cf-ccdc-4b3c-8bfc-17fb38df3a0a" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="cccc7bd6-d4a6-4339-bdac-90dde17279c6" class="code"><code>{
	&quot;ID_Campanha&quot;:&quot;1&quot;,
	&quot;ID_Empresa&quot;:&quot;1&quot;,
	&quot;Designacao&quot;:&quot;Titulo&quot;,
	&quot;Descricao&quot;:&quot;Teste&quot;,
	&quot;DataInicio&quot;:&quot;2019-05-30&quot;,
	&quot;DataFim&quot;:&quot;2020-05-30&quot;,
	&quot;Valor&quot;:&quot;50&quot;,
	&quot;TipoCampanha&quot;:&quot;1&quot;
},
{
	&quot;ID_Campanha&quot;:&quot;2&quot;,
	&quot;ID_Empresa&quot;:&quot;1&quot;,
	&quot;Designacao&quot;:&quot;Titulo2&quot;,
	&quot;Descricao&quot;:&quot;Teste2&quot;,
	&quot;DataInicio&quot;:&quot;2020-05-30&quot;,
	&quot;DataFim&quot;:&quot;2021-05-30&quot;,
	&quot;Valor&quot;:&quot;15&quot;,
	&quot;TipoCampanha&quot;:&quot;2&quot;
}</code></pre><p id="4f91db0c-5d61-48c3-9475-8eb1a12d6ec4" class="">
</p><h3 id="27bb3f9f-4cae-426f-ab2a-87f06ddcb5d6" class="">Campanha empresa</h3><ul id="d7263d8f-bfc3-4488-a561-adf4e550621e" class="bulleted-list"><li><strong>Descrição:</strong> Devolve a campanha de uma empresa correspondente ao ID_Campanha passado.</li></ul><ul id="519f8096-23c0-44fa-9d91-3ddd40b902aa" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/campanha/{ID_Campanha}</code></li></ul><ul id="ad9d29b7-ce57-4e8a-ade6-86cca6c1576b" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="c3a85d61-7568-4930-8892-16d005f81acd" class="code"><code>{
	&quot;ID_Campanha&quot;:&quot;1&quot;,
	&quot;ID_Empresa&quot;:&quot;1&quot;,
	&quot;Designacao&quot;:&quot;Titulo&quot;,
	&quot;Descricao&quot;:&quot;Teste&quot;,
	&quot;DataInicio&quot;:&quot;2019-05-30&quot;,
	&quot;DataFim&quot;:&quot;2020-05-30&quot;,
	&quot;Valor&quot;:&quot;50&quot;,
	&quot;TipoCampanha&quot;:&quot;1&quot;
}</code></pre><p id="c4ca1548-b2d6-4cca-8e3c-c9fb79dce5d1" class="">
</p><h3 id="0e3b8dd4-c4fd-4de4-9d0e-370699b98c84" class="">Instância campanha </h3><ul id="8ec8910b-de1a-4fb3-99d6-bcb9e5bf45cc" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todas as instancias campanha de uma dada campanha de uma empresa.</li></ul><ul id="63695e26-fd7d-43e4-a87a-458528ad22f8" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/campanha/{ID_Campanha}/instanciascampanha</code></li></ul><ul id="952211e4-64df-4854-af9c-2bb2ea1c2f62" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="f96ec164-d623-47b5-9713-2b283b5fc2a1" class="code"><code>{
	&quot;ID_Campanha&quot;:&quot;2&quot;,
	&quot;ID_Cartao&quot;:&quot;1&quot;,
	&quot;Utilizado&quot;:&quot;12&quot;,
	&quot;DataUtilizacao&quot;:&quot;2019-05-30 17:10:04&quot;,
	&quot;Notificacao&quot;:&quot;0&quot;
},
{
	&quot;ID_Campanha&quot;:&quot;2&quot;,
	&quot;ID_Cartao&quot;:&quot;4&quot;,
	&quot;Utilizado&quot;:&quot;0&quot;,
	&quot;DataUtilizacao&quot;:&quot;2019-06-22 18:10:46&quot;,
	&quot;Notificacao&quot;:&quot;0&quot;
}</code></pre><p id="fc1bee7b-54cc-4f87-ae24-097296f07450" class="">
</p><h3 id="06c1521f-3868-4feb-976b-5ecd2676455d" class="">Cartões empresa</h3><ul id="9a0f06bd-85cf-428f-992d-dffb883669fd" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todos os cartões (Utilizadores) de uma dada empresa.</li></ul><ul id="2d1cb6c2-6cb9-403d-89bc-748e0cad7c90" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/cartao</code></li></ul><ul id="bd75cb5e-0f65-4f9b-9326-b04f52871494" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="ecc0baa0-7950-47dc-b7b4-226f0e0dc9ce" class="code"><code>{
	&quot;ID_Cartao&quot;:&quot;4&quot;,
	&quot;ID_Cliente&quot;:&quot;2&quot;,
	&quot;ID_Empresa&quot;:&quot;1&quot;,
	&quot;DataFidelizacao&quot;:&quot;2019-06-22 18:09:19&quot;
},
{
	&quot;ID_Cartao&quot;:&quot;5&quot;,
	&quot;ID_Cliente&quot;:&quot;3&quot;,
	&quot;ID_Empresa&quot;:&quot;1&quot;,
	&quot;DataFidelizacao&quot;:&quot;2020-06-22 18:09:19&quot;
}</code></pre><p id="f67e6c98-32ef-4e0c-b425-1dcaad6168f5" class="">
</p><h3 id="4d35eade-3062-432a-827a-d5f4c371ac37" class="">Colaboradores empresa</h3><ul id="cad88c28-b99b-44f0-ac9b-2b07861c540b" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todos os colaboradores de uma dada empresa.</li></ul><ul id="0977f333-9197-413a-8107-425aa1188c56" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/colaborador</code></li></ul><ul id="9eddc277-414e-4494-bbd7-4430552aca34" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="8861fe69-3a3c-4bb3-ae57-4d81b3630fe4" class="code"><code>{
	&quot;Nome&quot;:&quot;Breno&quot;,
	&quot;Dono&quot;:&quot;1&quot;,
	&quot;URL&quot;:&quot;1&quot;
},
{
	&quot;Nome&quot;:&quot;Filipe&quot;,
	&quot;Dono&quot;:&quot;0&quot;,
	&quot;URL&quot;:&quot;6&quot;
}</code></pre><p id="46fe1947-71c6-4b7a-bd89-11a1238c8368" class="">
</p><h3 id="84642fba-2b03-46fa-9f09-b6e69a9cfcf7" class="">Colaborador empresa</h3><ul id="fae7b172-e6a1-47ff-adb7-076537c2016d" class="bulleted-list"><li><strong>Descrição:</strong> Devolve um colaborador de uma dada empresa, através do nome do colaborador.</li></ul><ul id="607fcb39-2c60-47a2-9b20-abaa3a0cc39d" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Empresa}/colaborador/{Nome}</code></li></ul><ul id="dc607e3c-baf2-488b-8d0a-0b65b412beab" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="c05afd35-2ad9-491d-87bb-61e3ddf465b9" class="code"><code>{
	&quot;Nome&quot;:&quot;Breno&quot;,
	&quot;Dono&quot;:&quot;1&quot;,
	&quot;URL&quot;:&quot;1&quot;
}</code></pre><p id="d6f17a44-138b-406b-a914-ebaa3140b8d1" class="">
</p><h3 id="c466b5ae-60a7-4540-88de-8aaf039887ad" class="">Nova empresa</h3><ul id="a96c619f-b8ca-4a44-9f33-c8fb31abb2f2" class="bulleted-list"><li><strong>Descrição:</strong> Adiciona uma nova empresa .</li></ul><ul id="3089d1fc-180f-48ad-8c0f-f0c696a4e22c" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST /api/empresa</code></li></ul><ul id="ff1181e7-b82f-42e3-876d-1b84754521b6" class="bulleted-list"><li><strong>Arguments:</strong><ul id="8367556a-8a04-4174-af44-78a4feb404f8" class="bulleted-list"><li><code>&quot;email&quot;: string</code> email da empresa</li></ul><ul id="4091eaec-0540-433e-91c4-22f6dcad25bc" class="bulleted-list"><li><code>&quot;password&quot;: string</code> password da conta</li></ul><ul id="3210c44d-9e1c-41bb-9dbe-518c3abb03ce" class="bulleted-list"><li><code>&quot;nome&quot;: string</code> nome da empresa</li></ul><ul id="4055fa9d-d954-4693-8bc6-ae236e578807" class="bulleted-list"><li><code>&quot;nif&quot;: string</code> nif da empresa</li></ul></li></ul><p id="7bbab7ea-ea9d-4a8d-8e17-6a048a41b0e7" class="">
</p><h3 id="de20723d-b386-47b4-8e71-da9b804f9c28" class="">Alterar empresa</h3><ul id="c9d9d3c8-ae51-49cd-97e1-728a8a95515c" class="bulleted-list"><li><strong>Descrição:</strong> Altera a informação passada por método <em>POST</em> na empresa com o <em>ID_Empresa.</em></li></ul><ul id="8a2c69cb-9600-44b5-b799-b3c18803ed5b" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST /api/empresa/{ID_Empresa}</code></li></ul><ul id="8bf7ef82-e08c-4968-b26e-b60beda59b04" class="bulleted-list"><li><strong>Arguments:</strong><ul id="dee36176-1053-4bee-b48a-7d155903b1fd" class="bulleted-list"><li><code>&quot;data&quot;: array</code> pode ser passado mais que uma um valor para ser alterado na tabela</li></ul></li></ul><p id="e4de2311-2e22-4bfc-95f5-c508ba42f9f5" class="">
</p><h3 id="51a6c315-0a68-49a3-93f3-28e5bbfcc500" class="">Alterar instância campanha de uma empresa</h3><ul id="44b92b35-00fe-4416-a91b-4b3246589151" class="bulleted-list"><li><strong>Descrição:</strong> Altera a informação passada por método <em>POST</em> na empresa com o <em>ID_Empresa</em>, na campanha com<em> ID_Campanha </em>e na instância campanha com o<em> ID_InstanciaCampanha.</em></li></ul><ul id="81845bfb-5f9d-4aa0-ac7e-b07f2ab319e6" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/empresa/{ID_Empresa}/campanha/{ID_Campanha}/instanciacampanha/{ID_InstanciaCampanha}</code></li></ul><ul id="e7f5c93a-2dd0-497a-a1f0-88ff18c3051b" class="bulleted-list"><li><strong>Arguments:</strong><ul id="6f421248-187f-40f8-b245-b722db4c1482" class="bulleted-list"><li><code>&quot;data&quot;: array</code> pode ser passado mais que uma um valor para ser alterado na tabela</li></ul></li></ul><p id="9706e149-e5ac-48d3-97dd-bb2a1ffa575a" class="">
</p><h3 id="d6499e0b-605d-4384-b7d8-85620f1a5647" class="">Adicionar colaborador numa empresa</h3><ul id="4ab41049-0bb3-4373-b505-c9960ca0fe66" class="bulleted-list"><li><strong>Descrição:</strong> Adiciona um novo colaborador a uma dada empresa através do <em>ID_Empresa</em>.</li></ul><ul id="935aa1f3-0e23-4e9b-84b3-e37043fd994c" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/empresa/{ID_Empresa}/colaborador/</code></li></ul><ul id="9071ce14-b1e9-4db6-8489-f60438210d65" class="bulleted-list"><li><strong>Arguments:</strong><ul id="99e02d49-5f18-4c46-a24f-d08a17d45beb" class="bulleted-list"><li><code>&quot;Nome&quot;: string</code> nome do colaborador</li></ul><ul id="4a263485-3fbb-4764-879f-d73ff5c5a5fd" class="bulleted-list"><li><code>&quot;CodigoAcesso&quot;: string</code> password de acesso</li></ul><p id="8b7522c9-111c-4ff1-9176-90811e082333" class="">
</p></li></ul><h3 id="437eb941-b663-431c-9c7f-0aaebdd10aef" class="">Alterar rating empresa</h3><ul id="155378dc-de7c-4bb1-aa6a-feb311b3da1a" class="bulleted-list"><li><strong>Descrição:</strong> Alterar rating dado por um cliente.</li></ul><ul id="32ba3f38-629a-48ea-876e-fbb2af2179bb" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/empresa/{ID_Empresa}/rating/</code></li></ul><ul id="c0f68845-ab3a-4ae9-a935-d68cc98d243f" class="bulleted-list"><li><strong>Arguments:</strong><ul id="418fd83a-be10-4f08-b25a-8a173918cb16" class="bulleted-list"><li><code>&quot;ID_Cliente&quot;: string</code> id do cliente</li></ul><ul id="e5c23c75-ccfa-4b93-b3a3-1c5571de0972" class="bulleted-list"><li><code>&quot;Rating&quot;: string</code> novo rating</li></ul></li></ul><p id="f25f0bb1-f061-40bc-9063-0015fbb28ed9" class="">
</p><h3 id="e09d6b64-a6b6-4689-a4f3-8a860667182f" class="">Adicionar nova campanha</h3><ul id="22b20118-4c40-466f-abf8-06db9be58f28" class="bulleted-list"><li><strong>Descrição:</strong> Adicionar nova campanha a uma empresa.</li></ul><ul id="b86cce33-a0d2-43aa-a84a-bf07822a55fc" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/empresa/{ID_Empresa}/campanha/</code></li></ul><ul id="91da7a5a-1cbf-411f-8bd3-6a65d3c72982" class="bulleted-list"><li><strong>Arguments:</strong><ul id="7c4888e6-d023-4728-b896-cc1b0d67481a" class="bulleted-list"><li><code>&quot;Designação&quot;: string</code> designação da campanha</li></ul><ul id="2dc821b1-bd48-4fe3-8ec6-2e35808e1ac4" class="bulleted-list"><li><code>&quot;Descrição&quot;: string</code> descrição da campanha</li></ul><ul id="c3273482-d95d-49ed-b790-ff06a9ef6097" class="bulleted-list"><li><code>&quot;Valor&quot;: string</code> valor da campanha</li></ul><ul id="92fd8d83-5d0f-4bc8-bc4e-6e8dcd0427f4" class="bulleted-list"><li><code>&quot;DataInicio&quot;: string</code> data de inicio da campanha</li></ul><ul id="0e583b69-7597-4480-88eb-6d9be54a6cad" class="bulleted-list"><li><code>&quot;DataFim&quot;: string</code> data de fim da campanha</li></ul></li></ul><h2 id="fe46ea13-7821-49fb-b72b-87952904f21c" class="">Clientes</h2><hr id="2e4606cb-42cd-4983-af20-68c8ab59652e"/><h3 id="79870695-7041-4cee-be04-fa3968fd481c" class="">Informações de clientes</h3><ul id="874de472-fc37-4b8c-b952-c906a90986f7" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todos os clientes.</li></ul><ul id="8827a99c-6a05-4b74-bbc4-2336f941f282" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente</code></li></ul><ul id="ea668c8f-00f9-403a-aa2b-4a7c41cd84cb" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="a1576964-017b-4992-a579-f61bf8b8706a" class="code"><code>{
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;Email&quot;:&quot;breno&quot;,
	&quot;Localizacao&quot;:&quot;Viseu&quot;,
	&quot;DataRegisto&quot;:&quot;2019-05-30 17:09:27&quot;,
	&quot;Ativo&quot;:&quot;1&quot;,
	&quot;PrimeiroNome&quot;:&quot;Breno&quot;,
	&quot;UltimoNome&quot;:&quot;Salles&quot;,
	&quot;DataNascimento&quot;:&quot;2019-05-29&quot;
},
{
	&quot;ID_Cliente&quot;:&quot;2&quot;,
	&quot;Email&quot;:&quot;diogo@diogo.com&quot;,
	&quot;Localizacao&quot;:&quot;Coimbra&quot;,
	&quot;DataRegisto&quot;:&quot;2020-05-30 17:09:27&quot;,
	&quot;Ativo&quot;:&quot;1&quot;,
	&quot;PrimeiroNome&quot;:&quot;Diogo&quot;,
	&quot;UltimoNome&quot;:&quot;Jeff&quot;,
	&quot;DataNascimento&quot;:&quot;1999-09-242&quot;
}</code></pre><p id="575b9f88-4115-41d6-8534-948e3db5a650" class="">
</p><h3 id="abe478f0-0a16-4841-8149-76779d8aaf40" class="">Informações de um cliente</h3><ul id="37a5df42-bca1-45d4-84ca-d10e5362dc7c" class="bulleted-list"><li><strong>Descrição:</strong> Devolve a informação de um cliente passado em <em>ID_Cliente</em>.</li></ul><ul id="9123d04f-e19b-45d2-a4db-662ce0e3c6e9" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente/{ID_Cliente}</code></li></ul><ul id="5bd882ff-6b7f-434c-a3ce-06cb1514596a" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="f213fc1d-86a5-489f-a5d7-3231fa6f958f" class="code"><code>{
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;Email&quot;:&quot;breno&quot;,
	&quot;Localizacao&quot;:&quot;Viseu&quot;,
	&quot;DataRegisto&quot;:&quot;2019-05-30 17:09:27&quot;,
	&quot;Ativo&quot;:&quot;1&quot;,
	&quot;PrimeiroNome&quot;:&quot;Breno&quot;,
	&quot;UltimoNome&quot;:&quot;Salles&quot;,
	&quot;DataNascimento&quot;:&quot;2019-05-29&quot;
}</code></pre><p id="307951d6-e976-4899-8c87-b1295139157a" class="">
</p><h3 id="84c61419-3984-4d15-a24f-267613c70cda" class="">Notificações cliente</h3><ul id="21b5df70-9af0-4b50-a9e7-95e54799de79" class="bulleted-list"><li><strong>Descrição:</strong> Devolve a todas as notificações pendentes do cliente.</li></ul><ul id="6184c08f-96d4-4cc4-aeda-a3760ada5f36" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente/{ID_Cliente}/notificacao</code></li></ul><ul id="106a2b1b-d178-445f-aac6-ffbd357ecfd2" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="dd002050-7246-4c02-af6d-a159a4cc67f4" class="code"><code>{
	&quot;status&quot;: &quot;true&quot;,
  &quot;message&quot;: [
        {
            &quot;ID_Empresa&quot;: &quot;1&quot;,
            &quot;ID_Cliente&quot;: &quot;1&quot;,
            &quot;Titulo&quot;: &quot;Iphone&quot;,
            &quot;Texto&quot;: &quot;Campanha de iphones 5s&quot;
        }
    ]
}</code></pre><p id="8e468fa0-fa96-42fb-8f24-4927cbc031c0" class="">
</p><h3 id="42de458c-2a0c-484b-ace7-db1d254f085a" class="">Rating cliente</h3><ul id="7e47351a-832e-442d-862e-5a39fbad6641" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todos os rating dados a um cliente. </li></ul><ul id="25f0c30e-9f36-4ba8-ba5a-08d6971016a2" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/empresa/{ID_Cliente}/rating</code></li></ul><ul id="742f4ced-68e0-4820-a508-481dbb619a67" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="1150a06f-9694-4568-a232-9f79ec5fd3c3" class="code"><code>{
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;ID_Empresa&quot;:&quot;18&quot;,
	&quot;DataRating&quot;:&quot;2019-06-22 15:33:22&quot;,
	&quot;Rating&quot;:&quot;4&quot;
},</code></pre><p id="863e78f2-1285-4105-a809-900be4fd46b3" class="">
</p><h3 id="1914892f-e337-461c-8a59-c65d63710722" class="">Rating cliente/empresa</h3><ul id="366a576c-9064-4e00-a587-8e7aaf61dce9" class="bulleted-list"><li><strong>Descrição:</strong> Devolve o rating que o cliente deu a uma empresa</li></ul><ul id="948e35bc-9f02-4ad3-810d-2ee5e173756e" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente/{ID_Cliente}/rating/{ID_Empresa}</code></li></ul><ul id="34541619-3354-46e3-b999-b0febd0f1109" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="c34a83a8-7edd-4de8-b471-cf1f2fc37b14" class="code"><code>{
    &quot;status&quot;: &quot;true&quot;,
    &quot;message&quot;: [
        {
            &quot;ID_Empresa&quot;: &quot;1&quot;,
            &quot;ID_Cliente&quot;: &quot;1&quot;,
            &quot;DataRating&quot;: &quot;2019-07-06 19:26:52&quot;,
            &quot;Rating&quot;: &quot;1&quot;
        }
    ]
}</code></pre><p id="a05fdfcd-9157-4744-b2a5-1688b5b2ed08" class="">
</p><h3 id="abd94a61-b00e-4a78-a37e-c9779187e06f" class="">Cartões cliente</h3><ul id="138a4c4b-a609-4ddf-9afc-b4858b110a55" class="bulleted-list"><li><strong>Descrição:</strong> Devolve todos os cartões a qual o cliente passado em <em>ID_Cliente,</em> está fidelizado.</li></ul><ul id="e237a3c4-d6c8-449f-972d-e64698f3ae70" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente/{ID_Cliente}/cartao</code></li></ul><ul id="e89a0782-4ced-477e-b596-2ee6c0cf6ed9" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="2261cce5-3901-4999-ad61-cd4f3fd96154" class="code"><code>{
	&quot;ID_Cartao&quot;:&quot;1&quot;,
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;ID_Empresa&quot;:&quot;20&quot;,
	&quot;DataFidelizacao&quot;:&quot;2019-05-30 17:09:48&quot;,
	&quot;Pontos&quot;: &quot;100&quot;
},
{
	&quot;ID_Cartao&quot;:&quot;2&quot;,
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;ID_Empresa&quot;:&quot;18&quot;,
	&quot;DataFidelizacao&quot;:&quot;2019-06-22 18:08:52&quot;,
	&quot;Pontos&quot;: &quot;100&quot;
}</code></pre><p id="612dac3e-6372-4f30-b55f-d9756d5db9c6" class="">
</p><h3 id="97864dde-95f9-4cdd-93a4-d8d77358db24" class="">Cartão cliente</h3><ul id="e4e1fa6f-0193-4a70-8894-5e237bbfd1b1" class="bulleted-list"><li><strong>Descrição:</strong> Devolve a informação de cartão <em>ID_Cartao</em> do cliente passado em <em>ID_Cliente,</em> está fidelizado.</li></ul><ul id="6fff8441-4db6-4d02-995c-663875feea71" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente/{ID_Cliente}/cartao/{ID_Cartao}</code></li></ul><ul id="abfd5a28-0a05-44ca-8d18-6068fb82921b" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="60553a6e-9210-4d1a-9987-bd6c0ff1ccf0" class="code"><code>{
	&quot;ID_Cartao&quot;:&quot;1&quot;,
	&quot;ID_Cliente&quot;:&quot;1&quot;,
	&quot;ID_Empresa&quot;:&quot;20&quot;,
	&quot;DataFidelizacao&quot;:&quot;2019-05-30 17:09:48&quot;,
	&quot;Pontos&quot;: &quot;100&quot;
}</code></pre><p id="6d70452d-c901-4f7e-b5ea-635d624f693c" class="">
</p><h3 id="9df96d34-c715-4bc9-b4ed-e06cece2bedf" class="">Instancias campanha de um cartão</h3><ul id="cd0dbe1a-25cf-46b1-9e7f-9873923dad08" class="bulleted-list"><li><strong>Descrição:</strong> todas as instâncias de campanhas associadas a um cartão <em>ID_Cartao</em>.</li></ul><ul id="9958970e-b5d6-465b-8279-81ae501136a8" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>GET /api/cliente/{ID_Cliente}/cartao/{ID_Cartao}/instanciacampanha</code></li></ul><ul id="698ac1d8-1edd-4c24-b2d3-80d724656ac6" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="323a9651-d523-433f-8d70-200ee19602f2" class="code"><code>{
	&quot;ID_Campanha&quot;:&quot;2&quot;,
	&quot;ID_Cartao&quot;:&quot;1&quot;,
	&quot;Utilizado&quot;:&quot;12&quot;,
	&quot;DataUtilizacao&quot;:&quot;2019-05-30 17:10:04&quot;,
	&quot;Notificacao&quot;:&quot;0&quot;
},
{
	&quot;ID_Campanha&quot;:&quot;3&quot;,
	&quot;ID_Cartao&quot;:&quot;1&quot;,
	&quot;Utilizado&quot;:&quot;1&quot;,
	&quot;DataUtilizacao&quot;:&quot;2019-06-22 18:07:56&quot;,
	&quot;Notificacao&quot;:&quot;1&quot;
}</code></pre><p id="fe28f3c3-3dbf-4951-b038-3b32709740f3" class="">
</p><h3 id="97d05c66-5ab1-49da-b4ce-7c1fdfd241e8" class="">Instancia campanha de um cartão</h3><ul id="1923f22a-89de-47f4-92bb-43dfa2d16d09" class="bulleted-list"><li><strong>Descrição:</strong> devolve uma instância de campanha associada ao <em>ID_InstanciaCampanha</em>.</li></ul><ul id="88438d16-7005-4ae0-8602-f1ca38bde39a" class="bulleted-list"><li><strong>Endpoint Path:</strong></li></ul><p id="cf6811be-d435-468b-bfb6-9dce6648ddf7" class=""> <code>GET /api/cliente/{ID_Cliente}/cartao/{ID_Cartao}/instanciacampanha/{ID_InstanciaCampanha</code></p><ul id="e2b7145d-470d-4918-be8a-b6c9cf08c987" class="bulleted-list"><li><strong>Returns:</strong></li></ul><pre id="ad29a2b2-f63e-4128-9983-eb45d5323ed1" class="code"><code>{
	&quot;ID_Campanha&quot;:&quot;2&quot;,
	&quot;ID_Cartao&quot;:&quot;1&quot;,
	&quot;Utilizado&quot;:&quot;12&quot;,
	&quot;DataUtilizacao&quot;:&quot;2019-05-30 17:10:04&quot;,
	&quot;Notificacao&quot;:&quot;0&quot;
}</code></pre><p id="51f81022-7d70-40b1-b682-cb7032adc12a" class="">
</p><h3 id="c0cd7453-083e-4130-8bc2-7c5645d74dd9" class="">Novo cliente</h3><ul id="f0512f5a-88d3-4ca3-b3ac-4d863e941f9b" class="bulleted-list"><li><strong>Descrição:</strong> Adiciona um novo cliente.</li></ul><ul id="d60c447c-f6d0-4485-9bd2-0ede722ce52b" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST /api/cliente</code></li></ul><ul id="f725a1da-a7bb-4ea5-a3db-7bae56f602f3" class="bulleted-list"><li><strong>Arguments:</strong><ul id="d4f8cd77-9b8b-4ea0-b1ec-f63e189e7d83" class="bulleted-list"><li><code>&quot;data&quot;: array</code> toda a informação relativa ao cliente</li></ul></li></ul><ul id="045ed758-7f65-4e91-9ee1-23a5e061212e" class="bulleted-list"><li><strong>Return:</strong> True/False</li></ul><p id="33d639f8-97c1-45fc-af06-b4344c3ac703" class="">
</p><h3 id="3cbfbcd7-fa0a-4091-8e5a-8634d740b90c" class="">Alterar cliente</h3><ul id="2c1fdee4-1102-4181-bac3-d03f3cc4a517" class="bulleted-list"><li><strong>Descrição:</strong> Altera a informação passada por método <em>POST</em> no cliente com o <em>ID_Cliente.</em></li></ul><ul id="051c044a-d0d0-495e-9e52-a4cd8395cbd6" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST /api/cliente/{ID_Cliente}</code></li></ul><ul id="2457c6c6-9d8a-4986-91a1-4fd696acc6a3" class="bulleted-list"><li><strong>Arguments:</strong><ul id="1967c324-3958-48a6-97c2-c1fec5814d76" class="bulleted-list"><li><code>&quot;data&quot;: array</code> pode ser passado mais que uma um valor para ser alterado na tabela</li></ul></li></ul><ul id="fab02a20-4e8f-44b0-8d93-f14c230866d2" class="bulleted-list"><li><strong>Return:</strong> True/False</li></ul><p id="30687019-7aad-4198-afb9-215a4bbb12fd" class="">
</p><h3 id="e9ff9116-2c3b-4ff3-8b80-7809f0997f25" class="">Alterar instância campanha de um cliente</h3><ul id="04db5188-08e3-4bf8-9d6d-cf65420f751a" class="bulleted-list"><li><strong>Descrição:</strong> Altera a informação passada por método <em>POST</em> na instancia campanha.</li></ul><ul id="8b26d824-4b2e-4188-a146-c2666934819b" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/cliente/{ID_Cliente}/cartao/{ID_Cartao}/instanciacampanha/{ID_InstanciaCampanha}</code></li></ul><ul id="59c33d06-3f0c-49a4-b045-0089ef79a2cb" class="bulleted-list"><li><strong>Arguments:</strong><ul id="bb19f103-02f2-45f9-9c04-ffd96e7e44b5" class="bulleted-list"><li><code>&quot;data&quot;: array</code> pode ser passado mais que uma um valor para ser alterado na tabela</li></ul></li></ul><ul id="8d607317-c627-409a-8d6a-450ea5127024" class="bulleted-list"><li><strong>Return:</strong> True/False</li></ul><p id="ab24bc2f-3ea5-4773-b80a-753183fe1a65" class="">
</p><h3 id="9277a4e6-96eb-43ca-a804-88255461749e" class="">Alterar rating cliente</h3><ul id="b487945e-5624-4930-837e-f24799128f02" class="bulleted-list"><li><strong>Descrição:</strong> Alterar rating dado a uma empresa.</li></ul><ul id="261b0144-9f65-43ad-b73a-b9db3ec925b8" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/cliente/{ID_Cliente}/rating/</code></li></ul><ul id="10c863c6-afb7-4272-aa99-92b0213b7111" class="bulleted-list"><li><strong>Arguments:</strong><ul id="8916ae14-3f07-4055-8930-22dabd17703c" class="bulleted-list"><li><code>&quot;ID_Empresa&quot;: string</code> id da empresa</li></ul><ul id="a1ac3729-8740-42f8-917b-16707284e642" class="bulleted-list"><li><code>&quot;Rating&quot;: string</code> novo rating</li></ul></li></ul><ul id="707ec847-009d-48ee-afe0-cea2c3ef2775" class="bulleted-list"><li><strong>Return:</strong> True/False.</li></ul><h3 id="5062145e-f91d-4ace-b0c4-4b39087536d0" class="">Novo cartão cliente</h3><ul id="a8b21065-f204-440e-9d22-e81a3fe753a9" class="bulleted-list"><li><strong>Descrição:</strong> Criar um novo cartão de fidelização.</li></ul><ul id="51e401d8-1ac6-4839-93d2-ad9fd9301521" class="bulleted-list"><li><strong>Endpoint Path:</strong> <code>POST/api/cliente/{ID_Cliente}/cartao/</code></li></ul><ul id="a49929d2-5617-4eb3-bcda-1374e5143026" class="bulleted-list"><li><strong>Arguments:</strong><ul id="3d4263c3-f65b-4da3-8262-ab1404fff28a" class="bulleted-list"><li><code>&quot;ID_Empresa&quot;: string</code> id da empresa</li></ul></li></ul><ul id="4f21805c-cb9f-4422-86a3-35884b764613" class="bulleted-list"><li><strong>Return:</strong> True/False</li></ul><p id="62db8bab-f9e9-4c1f-be07-044e80076f03" class="">
</p></div></article></body></html>