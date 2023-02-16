<?php
require_once('header.php')
?>

		<!-- partie principale de la page -->
		<main>
			<h2>Main</h2>

			<!-- première section -->
			<section>
				<h3>Section 1</h3>
				<article>
					<div>
						<h4>Create</h4>
						<p>Clone and Existing Repository</p>
						<p>$ git clone ssh://user@domain.com/repo.git</p>
						<p>Create a new local repository</p>
						<p>$ git init</p>
						<p>Clone and Existing Repository</p>
						<p>$ git clone ssh://user@domain.com/repo.git</p>
					</div>
				</article>
				<article>
					<div>
						<h4>Local Changes</h4>
						<p>Changed files in your working directory</p>
						<p>$ git status</p>
						<p>Changes to tracked files</p>
						<p>$ git diff</p>
						<p>Add all current changes to the next commit</p>
						<p>$ git add .</p>
						<p>Add some changes in file to the next commit</p>
						<p>$ git add -p file</p>
						<p>Commit all local changes in tracked files</p>
						<p>$ git commit -a</p>
						<p>Commit previously staged changes</p>
						<p>$ git add -p file</p>
						<p>Add some changes in to the next commit</p>
						<p>$ git commit</p>
						<p>Change the last commit Don‘t amend published commits!</p>
						<p>$ git commit --amend</p>
					</div>
				</article>
				<article>
					<div>
						<h4>Branching & Tags</h4>
						<p>List all existing branches</p>
						<p>$ git branch</p>
						<p>Switch HEAD branch</p>
						<p>$ git checkout branch</p>
						<p>Create a new branch based on your current HEAD</p>
						<p>$ git branch new-branch</p>
						<p>Create a new tracking branch based on a remote branch</p>
						<p>$ git checkout --track remote/branch</p>
						<P>Delete a local branch</p>
						<P>$ git branch -d branch</p>
						<P>Mark the current commit with a tag</p>
						<P>$ git tag tag-name</p>
					</div>
				</article>
				<article>
					<div>
						<h4></h4>
						<p>Lorem ipsum</p>
					</div>
				</article>
			</section>

			<!-- deuxième section -->
			<section>
				<h3>Section 2</h3>
				<article>
					<div>
						<h4>article 3</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</article>
				<article>
					<div>
						<h4>article 4</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</article>
			</section>

			<!-- bandeau de communication du site -->
			<aside>
				<article></article>
				<article></article>
				<article></article>
				<article></article>
			</aside>
			
		</main>
<!-- footer -->
<?php
require_once('footer.php');
?>