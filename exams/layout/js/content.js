// number from english to indi converter
window.onload = function () {
    String.prototype.toIndiNums = function () {
        var indies = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        return this.replace(/[0-9]/g, function (w) {
            return indies[+w]
        });
    }
    var parsed = (function () {
        var string = location.search;
        string = string.replace('?', '');
        var parts = string.split('&');
        var obj = {};
        parts.forEach((part) => {
            var line = part.split('=');
            obj[line[0]] = line[1];
        })
        return obj;
    })();
    // horizontal scrolling
    var tableHead = document.querySelector('.data-table .table-head');
    var tableBody = document.querySelector('.data-table .table-body');

    if (tableBody != null) {
        tableBody.scrollTo(tableBody.scrollWidth, 0)
        tableBody.addEventListener('scroll', function (ev) {
            tableHead.scroll(tableBody.scrollLeft, 0);
        });
    }

    let cols = {
        evaluation: [
            "arabic",
            "english",
            "socialStudies",
            "math",
            "sciences",
            "activity_1",
            "activity_2",
            "religion",
            "computer",
            "draw",
            "sports"
        ],
        practical: [
            "sciences",
            "computer"
        ],
        written: [
            "arabic",
            "english",
            "socialStudies",
            "aljebra",
            "geometry",
            "sciences",
            "religion",
            "computer",
            "draw"
        ]
    }
    // columns names for monitoring table
    // let colNames = [
    //     "arabic",
    //     "english",
    //     "socialStudies",
    //     "math",
    //     "sciences",
    //     "activity_1",
    //     "activity_2",
    //     "religion",
    //     "computer",
    //     "draw",
    //     "sports"
    // ];


    const columnSummary = function (colName) {
        var cells = document.querySelectorAll(`.data-table .table-body tr td[colname="${colName}"]`);
        var absens = 0, empty = 0;
        for (let i = 0; i < cells.length; i++) {
            if (cells[i].textContent === 'غ') {
                absens++;
            }
            if (cells[i].textContent === '') {
                empty++;
            }
        }

        return {
            monitoring: `${cells.length - empty}`,
            absens: `${absens}`,
            empty: `${empty}`,
            count: `${cells.length}`
        };

    }

    if (document.querySelector('.monitoring-summary') != null) {
        var colNames = [];
        if(parsed.view === 'practical') colNames = cols.practical;
        else if(parsed.view === 'evaluation') colNames = cols.evaluation;
        else if(parsed.view === 'written') colNames = cols.written;
        console.log(parsed);
        console.log(parsed.view === 'written');
        colNames.forEach((colName) => {
            getSummary(colName);
        });
    }

    function getSummary(colName) {
        const monitoringRow = document.querySelector('tr[rowname="monitoring"]');
        const absenceRow = document.querySelector('tr[rowname="absence"]');

        monitoringRow.querySelector(`td[colname=${colName}]`).textContent = columnSummary(colName).monitoring.toIndiNums();
        absenceRow.querySelector(`td[colname=${colName}]`).textContent = columnSummary(colName).absens.toIndiNums();
    }

    // dataTable cells event handler
    function saveChanges(cell) {
        return function () {
            if (cell.getAttribute('dirty') == 'true' && cell.textContent != cell.getAttribute('old-value')) {
                let colName = cell.getAttribute('colname');
                let dataValue = cell.textContent[cell.textContent.length - 1] === '.' ? cell.textContent.replace('.', '') : cell.textContent;
                dataValue = dataValue === 'غ'? -1 : dataValue;
                let id = cell.parentElement.querySelector('.studentId').textContent;

                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        console.log(this.responseText);
                        var msg = JSON.parse(this.responseText);
                        if (msg.state === 'succeeded') {
                            cell.textContent = cell.textContent.toIndiNums();
                            if (cell.textContent === 'غ') {
                                cell.classList.add('warning');
                            } else {
                                cell.classList.remove('warning');
                            }
                        }
                    }
                    getSummary(colName);
                }
                xhr.open('POST', "http://localhost:8080/schoolmanager/exams/data-handlers/monitroing-save.php", true);

                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                var data = {
                    grade: parsed.grade,
                    semester: parsed.target.split('-')[0],
                    table: parsed.view,
                    dataName: colName,
                    dataValue: dataValue,
                    studentId: id
                }
                console.log(data);
                xhr.send("ajax=1&dataName=" + JSON.stringify(data));
            }
        }
    }

    function keyDownHandler(event, cell, keyCode) {
        switch (keyCode) {
            case (13):
                event.preventDefault();
                cell.blur();
                keyCode = 40;
                keyDownHandler(event, cell, keyCode);
                break;

            case (27):
                cell.textContent = cell.getAttribute('old-value');
                cell.setAttribute('old-value', '');
                cell.setAttribute('dirty', false);
                cell.blur();
                return;

            case (37):
            case (39):
                event.preventDefault();
                if (keyCode == 37 && cell.nextElementSibling != null) cell.nextElementSibling.focus();
                if (keyCode == 39 && cell.previousElementSibling != null) cell.previousElementSibling.focus();
                break;

            case (38):
            case (40):
                event.preventDefault();

                let currentRow = cell.parentElement;
                let nextRow = null;
                let currentIndex = -1;

                for (let i = 0; i < currentRow.childElementCount; i++) {
                    if (cell == currentRow.childNodes[i]) {
                        currentIndex = i;
                        break;
                    }
                }

                if (keyCode == 38) nextRow = currentRow.previousElementSibling;
                else if (keyCode == 40) nextRow = currentRow.nextElementSibling;
                if (nextRow != null) nextRow.childNodes[currentIndex].focus();
                break;

            default: return;
        }
    }

    let cells = document.querySelectorAll('.data-table .table-body tbody tr td[contenteditable="true"]');
    if (cells.length > 0) {
        cells.forEach(function (cell) {

            cell.addEventListener('keydown', function (event) {
                keyDownHandler(event, cell, event.keyCode);
            });

            cell.addEventListener('input', function () {
                cell.setAttribute('dirty', true);
            });

            cell.addEventListener('blur', saveChanges(cell));
            cell.addEventListener('blur', function () {
                cell.classList.remove('active-cell');
                cell.parentElement.classList.remove('active-row');
            })

            // save cell old value
            cell.addEventListener('focus', function () {
                cell.setAttribute('old-value', cell.textContent);
                cell.classList.add('active-cell');
                cell.parentElement.classList.add('active-row');
            });

            cell.addEventListener('focus', function () {
                let range = document.createRange();
                range.selectNodeContents(this);
                let selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
            });
        })
    }

    // adding options buttons to mid-sheet headers

    const createOptions = function () {
        var layout = (this.clientWidth / this.clientHeight) < 1 ? 'portrait' : 'landscape';

        var optionsContainer = document.createElement('div');
        optionsContainer.classList.add('head-opts-container');
        optionsContainer.classList.add(`${layout}`);

        var sort = document.createElement('span');
        sort.classList.add('sort');
        sort.innerHTML = '<i class="fa fa-sort"></i>';

        var hide = document.createElement('span');
        hide.classList.add('hide');
        hide.innerHTML = '<i class="fa fa-eye-slash"></>';

        var freeze = document.createElement('span');
        freeze.classList.add('freeze');
        freeze.innerHTML = '<i class="fa fa-lock"></i>';


        optionsContainer.appendChild(sort);
        optionsContainer.appendChild(hide);
        optionsContainer.appendChild(freeze);

        // assinging the options click handlers
        // this disabled for some problems
        // hide.onclick = hideCol;
        this.appendChild(optionsContainer);
    }

    var colsHeads = document.querySelectorAll('.data-table .table-head th.col-head');
    colsHeads.forEach((colHead) => {
        // colHead.addEventListener('mouseenter', createOptions);

        colHead.addEventListener('mouseleave', function (ev) {
            var optionsContainer = colHead.querySelector('.head-opts-container');
            // optionsContainer.remove();
        });
    })

    // Options buttons click handlers
    // sort
    // hide
    function hideCol() {
        var rowHead = this.parentElement.parentElement.parentElement;
        var index = Array.from(rowHead.children).indexOf(this.parentElement.parentElement);
        console.log(index);
        var rows = tableBody.querySelectorAll('table tr');
        console.log(rows);
        let i = 0;

        rowHead.children[index].style.display = 'none';
        rows.forEach(function (row) {
            row.children[index].style.display = 'none';
        })
    }
    // freeze

    // Show Hide cells background color button
    var showHideBGColor = document.querySelector('#options .show-hide-colors');
    showHideBGColor.onclick = function () {
        this.textContent = this.textContent === 'إخفاء الألوان' ? 'إظهار الألوان' : 'إخفاء الألوان';

        var heads = document.querySelectorAll('.table-head th[colspan="1"]');
        heads.forEach(function (head) {
            head.classList.toggle('no-bg-color');
        })

        var totals = document.querySelectorAll('.table-body td.total');
        totals.forEach(function (td) {
            td.classList.toggle('no-bg-color');
        })

        var grades = document.querySelectorAll('.table-body td.grade');
        grades.forEach(function (td) {
            td.classList.toggle('no-bg-color');
        })
    }

}

