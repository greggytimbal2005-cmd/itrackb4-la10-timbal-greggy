# G1: Which column did you turn into a table, and why that one?

I turned the `genre` column into a `genres` table. Genre comes from a fixed list (Action, Adventure, Drama), the same values repeat across many movies, and a genre could later need its own details such as a description. The `year` column is not a good candidate because a year is just a value, not a thing with its own details.

# G2: What number did screenshot 6 show, and why exactly that number?

Screenshot 6 showed 6 queries. The first query loads all five movies, and then Laravel runs one more query for each movie to load its genre, which is 5 more queries, for a total of 6.

# G3: What would break if the belongsTo method were plural?

If `belongsTo` were named `genres()` instead of `genre()`, the view call `$movie->genre->name` would fail with an undefined relationship error, and `with('genre')` would also fail. Eloquent takes the method name, adds `_id`, and looks for a `genres_id` column, which does not exist, since the column on the movies table is `genre_id`.