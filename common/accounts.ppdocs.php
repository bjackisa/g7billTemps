{* ROTARY — password protected files *}
{RR::Header(['title'=>$LANG.PASSWORD_PROTECTED_FILES,'icon'=>'fas fa-lock'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">File</th>
      <th class="all">Username</th>
      <th class="all">Password</th>
      <th class="all">Date</th>
      <th class="all">Status</th>
      <th class="none">Actions</th>
      <th class="none">Audit</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><a href="http://{$host.domain}/{$R.folder}" class="rt-doc-link" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-folder"></i> {$R.file} <i class="fas fa-external-link-alt"></i></a></td>
    <td><code class="rt-code">{$R.username}</code></td>
    <td><code class="rt-code is-secret">{$R.password}</code></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td>{RR::Buttons(['id'=>$R.id])}</td>
    <td>{$R.audit|default:'N/A'}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
