<h2 class="bd-title mt-5" id="endpoints"><?= Yii::t('app', 'Endpoints') ?></h2>

<h3 class="bd-title mt-4" id="create"><?= Yii::t('app', 'Criar Link') ?></h3>
<p class="bd-lead">
    <?= Yii::t('app', 'Criar um link curto para o determinado target longo.') ?>
</p>

<p class="mt-3"><b><?= Yii::t('app', 'Pedido') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-success float-right">POST</span>Endpoint: /api/v1/create
Host: https://curtos.pt</code></pre>

</figure>

<p class="mt-3"><b><?= Yii::t('app', 'Payload') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-secondary float-right">JSON</span>{
	"target": "https://curtos.pt",
	"expires_after": 60 //<?= Yii::t('app', 'Opcional') ?>

}</code></pre>

</figure>

<p class="mt-3"><b><?= Yii::t('app', 'Resposta') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-secondary float-right">JSON</span>{
    "name": "Created",
    "message": "Short link created with success",
    "code": 201,
    "status": "OK",
    "data": {
        "code": "3825d5",
        "target": "https://www.curtos.pt/",
        "short": "https://www.curtos.pt/3825d5",
        "expires_after": "2020-07-02 23:53:46"
    }
}</code></pre>
</figure>

<h3 class="bd-title mt-5" id="delete"><?= Yii::t('app', 'Apagar Link') ?></h3>
<p class="bd-lead">
    <?= Yii::t('app', 'Apagar um link curto com determinado código.') ?>
</p>

<p class="mt-3"><b><?= Yii::t('app', 'Pedido') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-danger float-right">DELETE</span>Endpoint: /api/v1/delete
Host: https://curtos.pt</code></pre>

</figure>

<p class="mt-3"><b><?= Yii::t('app', 'Payload') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-secondary float-right">JSON</span>{
	"code": "18acbf"
}</code></pre>

</figure>

<p class="mt-3"><b><?= Yii::t('app', 'Resposta') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-secondary float-right">JSON</span>{
    "name": "OK",
    "message": "Short link deleted with success",
    "code": 200,
    "status": "OK",
    "data": []
}</code></pre>
</figure>


<h3 class="bd-title mt-5" id="stats"><?= Yii::t('app', 'Estatísticas') ?></h3>
<p class="bd-lead">
    <?= Yii::t('app', 'Obter estatísticas de um link curto com determinado código.') ?>
</p>

<p class="mt-3"><b><?= Yii::t('app', 'Pedido') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-primary float-right">GET</span>Endpoint: /api/v1/stats?code={code}
Host: https://curtos.pt</code></pre>

</figure>

<p class="mt-3"><b><?= Yii::t('app', 'Resposta') ?></b></p>
<figure class="highlight">
    <pre><code><span class="badge badge-secondary float-right">JSON</span>{
    "name": "OK",
    "message": "Data retrieved with success",
    "code": 200,
    "status": "OK",
    "data": {
        "code": "f3c16f",
        "target": "https://curtos.pt",
        "short": "https://curtos.pt/f3c16f",
        "expires_after": "2021-02-21 23:05:12",
        "visits": 37,
        "byBrowser": {
            "Chrome": 12,
            "Firefox": 6,
            "Safari": 6,
            "Opera": 6,
            "Internet Explorer": 5,
            "Edge": 5,
            "Boots": 0
        },
        "byCountry": {
            "PT": 16,
            "ES": 2,
            "IT": 2,
            "FR": 1
        }
    }
}</code></pre>
</figure>
