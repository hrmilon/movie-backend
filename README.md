### Movie Recommendation ai backend
- Send your mood,genre you like and your thoughts
- Which gets you through llm + tmdb
- Get 5 curated results you like


#### Deployment issues
**Problems**
- connection error using sqlite
    - reason : sqlite driver doesn't support in `koyeb` 

- neon.tech postgress has the problem with migration

  - reason: used pooled connection string which cant run migration in koyeb console.

- `env` of pgsql doesn't work as long as don't modified that database.php iniside.

- without `ProcFile` koyeb serverless deployment does'nt work the reason behind is koyeb doesn't actually know how to interpret with application and where to start
