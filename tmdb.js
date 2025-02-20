const url = 'https://api.themoviedb.org/3/search/movie?query=Avengers';
const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJiNTdhMDYyNGEwMjRhNTQ0M2I1NTY5ZjlmNjE3ZDViNyIsIm5iZiI6MTczODQ3NDg5MC4wMTQwMDAyLCJzdWIiOiI2NzlmMDU4YWE4OTM1OTE0MTU5NTRmMjEiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.Czx73JzXIN_X4K8BDnU9pbmtWoPQaO54EPlsF5NRpX4_XX'
    }
};

fetch(url, options)
    .then(res => res.json())
    .then(json => {
        json.results.forEach(r => console.log(r.
            original_title));
    })
    .catch(err => console.error(err));