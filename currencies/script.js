import fs from "fs";

let text = fs.readFileSync("./locales.txt", "utf8");

text = text.split("<CcyNtry>");

let result = text
    .filter(e => e.indexOf("CtryNm") !== -1)
    .map(e => e.replace("</CcyNtry>", ""))
    .map(e => e.replace(' IsFund="true"', ""))
    .map(e => {
        return {
            name: findInLine(e, "CcyNm>"),
            code: findInLine(e, "Ccy>"),
            country: [findInLine(e, "CtryNm>")],
        };
    });

function findInLine(text, code) {
    const text_1 = text.split(code)[1];
    if (!!text_1) return text_1.split("</")[0];
    else return false;
}

const final_result = result.reduce((e, k) => {
    const index = e.findIndex(m => m?.code === k?.code);
    if (index !== -1) {
        e[index].country.push(k.country[0]);
    } else {
        e.push(k);
    }
    return e;
}, []);

// fs.writeFileSync("jsonResult.txt", JSON.stringify(final_result));
console.log(final_result);
