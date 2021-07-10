import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import bash from 'highlight.js/lib/languages/bash';
import php from 'highlight.js/lib/languages/php';
import scss from 'highlight.js/lib/languages/scss';
import sql from 'highlight.js/lib/languages/sql';

hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('bash', bash);
hljs.registerLanguage('php', php);
hljs.registerLanguage('sql', sql);
hljs.registerLanguage('scss', scss);

document.querySelectorAll('pre > code').forEach(el => {
  hljs.highlightElement(el);
});

const tree = document.querySelector('.js-tree-menu');

if (tree) {
  tree.addEventListener('click', event => {
    
    const closestSectionHeader = event.target.closest(".js-main-section-header");

    if (closestSectionHeader) {
      const closestSection = closestSectionHeader.closest(".js-main-section");

      closestSection.classList.toggle('is-open');
    }

    const closestSubsectionHeader = event.target.closest(".js-subsection-header");

    if (closestSubsectionHeader) {
      const closestSubsection = closestSubsectionHeader.closest(".js-subsection");

      closestSubsection.classList.toggle('is-open');
    }
  });
}