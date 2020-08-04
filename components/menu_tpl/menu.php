<li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="<?= yii\helpers\Url::to(['category/view','id'=> $category['id']])?>"><?= $category['name']?></a>
                <? if( isset($category['childs'] )) : ?>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href=""><?= $this->getMenuHtml($category['childs']);?></a></li>
                </ul>
                <? endif?>
              </li>

              