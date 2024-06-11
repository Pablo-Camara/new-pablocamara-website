PabloCamaraLoader = {
    toggleClassFromChildren: function(element, childrenTagNames, oldClass, newClass, extraOptions) {
        var totalReplaces = 0;
        for (var x = 0; x < childrenTagNames.length; x++) {
          var childrenToChange = element.getElementsByTagName(childrenTagNames[x]);
          for (var i = 0; i < childrenToChange.length; i++) {
            if (!childrenToChange[i].classList.contains(oldClass)) {
              continue;
            }
            childrenToChange[i].classList.replace(oldClass, newClass);
            totalReplaces++;
          }
        }
        return totalReplaces;
    },
    animatePabloCamaraLoader: function(show) {
        var pabloCamara = document.getElementById('pablocamara');
        var oldClass = show ? 'start' : 'end';
        var newClass = show ? 'end' : 'start';
        this.toggleClassFromChildren(pabloCamara, ['div'], oldClass, newClass);
    }
};

setTimeout(function () {
    PabloCamaraLoader.animatePabloCamaraLoader(true);
}, 100);
