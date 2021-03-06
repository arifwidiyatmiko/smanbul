import { Assertions } from '@ephox/agar';
import { Chain } from '@ephox/agar';
import { GeneralSteps } from '@ephox/agar';
import { Logger } from '@ephox/agar';
import { Pipeline } from '@ephox/agar';
import { TinyApis } from '@ephox/mcagar';
import { TinyLoader } from '@ephox/mcagar';
import { TinyUi } from '@ephox/mcagar';
import { SelectorFilter } from '@ephox/sugar';
import TablePlugin from 'tinymce/plugins/table/Plugin';
import TableTestUtils from '../../module/test/TableTestUtils';
import ModernTheme from 'tinymce/themes/modern/Theme';
import { UnitTest } from '@ephox/bedrock';

UnitTest.asynctest('browser.tinymce.plugins.table.DefaultTableToolbarTest', function () {
  const success = arguments[arguments.length - 2];
  const failure = arguments[arguments.length - 1];

  ModernTheme();
  TablePlugin();

  const tableHtml = '<table><tbody><tr><td>x</td></tr></tbody></table>';

  TinyLoader.setup(function (editor, onSuccess, onFailure) {
    const tinyApis = TinyApis(editor);
    const tinyUi = TinyUi(editor);

    Pipeline.async({}, [
      Logger.t('test default count of toolbar buttons', GeneralSteps.sequence([
        tinyApis.sFocus,
        tinyApis.sSetContent(tableHtml),
        TableTestUtils.sOpenToolbarOn(editor, 'table td', [0]),
        Chain.asStep({}, [
          tinyUi.cWaitForUi('no context found', 'div[aria-label="Inline toolbar"]'),
          Chain.mapper(function (x) {
            return SelectorFilter.descendants(x, 'button').length;
          }),
          Assertions.cAssertEq('has correct count', 8)
        ])
      ]))
    ], onSuccess, onFailure);
  }, {
    plugins: 'table',
    skin_url: '/project/js/tinymce/skins/lightgray'
  }, success, failure);
});
