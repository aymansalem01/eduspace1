<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut Icon" type="x-icon" href={{ asset("assest/image/logo.png") }}>

    <title>Why Space</title>
    <!-- Link to the external stylesheet -->
    <link rel="stylesheet" href={{asset("assest/css/whyspace.css")}}>
</head>
<body>
    <!-- Header section with a background image and overlay for the description -->
    <header class="hero-section">
        <div class="overlay">
            <div class="description">
                <h1>لماذا EduSpace?</h1>
                <p>لا يقتصر اهتمام EduSpace على الكون فحسب؛ إنها مساحة للاستكشاف والابتكار والتعليم.
                    يمثل "الفضاء" الفرص اللامحدودة التي نقدمها للطلاب، بدءًا من مختبرات الكيمياء الافتراضية وحتى أدوات التعلم التي تعمل بالذكاء الاصطناعي.
                    إنها أيضًا مساحة للمتعلمين لتنمية وتوسيع معارفهم. انضم إلينا في جعل التعليم لانهائيًا مثل الكون.</p>
            </div>
        </div>
    </header>

    <!-- Container for the AI section -->
    <div class="container" dir="rtl">
        <div class="text-section">
            <h2>لماذا الذكاء الاصطناعي في EduSpace؟</h2>
            <p>يعمل الذكاء الاصطناعي في EduSpace على تحسين التعلم من خلال توفير تجارب مخصصة، وأتمتة المهام الروتينية، وتقديم رؤى عميقة حول البيانات التعليمية، مما يجعل التعلم أكثر كفاءة وتأثيرًا.</p>
        </div>
        <div class="model-section">
            <!-- Spline 3D model viewer for AI section -->
            <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.12/build/spline-viewer.js"></script>
            <spline-viewer url="https://prod.spline.design/iwCKRTN6lyZeTJ6J/scene.splinecode"></spline-viewer>
        </div>
    </div>

    <!-- Container for the VR section, with reversed layout -->
    <div class="container reverse-layout">
        <div class="text-section">
            <h2>لماذا الواقع الافتراضي في EduSpace؟</h2>
            <p>تتيح تقنية الواقع الافتراضي في EduSpace للطلاب تجربة عمليات محاكاة غامرة وعملية، وسد الفجوة بين النظرية والتطبيق، وإعدادهم لتطبيقات العالم الحقيقي.</p>
        </div>
        <div class="model-section">
            <!-- Spline 3D model viewer for VR section -->

            <spline-viewer url="https://prod.spline.design/0R8bRV2K1uVhthLH/scene.splinecode"></spline-viewer>
        </div>
    </div>

    <!-- Container for the Games section -->
    <div class="container">
        <div class="text-section">
            <h2>لماذا الألعاب في EduSpace؟</h2>
            <p>تعمل الألعاب في EduSpace على تحويل التعلم إلى تجربة جذابة وتفاعلية، حيث يمكن للطلاب تطبيق معرفتهم في سيناريوهات ممتعة ومليئة بالتحديات، مما يحفزهم على تحقيق المزيد.</p>
        </div>
        <div class="model-section">
            <!-- Spline 3D model viewer for Games section -->

            <spline-viewer url="https://prod.spline.design/gPPbJiiRWOR1xWar/scene.splinecode"></spline-viewer>
        </div>
    </div>
</body>
</html>
