	<!-- Form สำหรับรับข้อมูลการ Login -->
	<div id="content">
		
		<form action="Checklogin.php" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="username">username</label>
					<input type="text" id="username" name="username" class="round full-width-input" autofocus />
				</p>

				<p>
					<label for="password">password</label>
					<input type="password" id="password" name="password" class="round full-width-input" />
				</p>

				<button class="button round blue image-right ic-right-arrow">LOG IN</button>

			</fieldset>

			<br/><div class="information-box round"><?php if(isset($_GET['err'])) echo "ข้อมูล Login ไม่ถูกต้อง"; ?>
</div>

		</form>
		
	</div> <!-- end content -->
	
	
	

</body>
</html>